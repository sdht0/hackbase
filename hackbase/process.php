<?php

require 'config.php';

function secure($var) {
  foreach ($var as $key => $value)
    $var[$key] = addslashes($value);
  return $var;
}

function check($var) {
  $flag = True;
  foreach ($var as $value) {
    if ($value == "")
      $flag = FALSE;
  }
  return $flag;
}

DB::insert('log', array('session' => addslashes(print_r($_SESSION, TRUE)), 'request' => addslashes(print_r($_REQUEST, TRUE))));

if (isset($_POST['register'])) {
    $_POST['data'] = secure($_POST['data']);
    DB::insert('users', $_POST['data']);
    $_SESSION['msg'] = "Registration Successful.";
    redirectTo(SITE_URL);
} elseif (isset($_POST['login'])) {
  $_POST['data'] = secure($_POST['data']);
  $query = "select * from users where teamname = '" . $_POST['data']['teamname'] . "' and password = '" . $_POST['data']['password'] . "'";
  $team = DB::findOneFromQuery($query);
  if ($team) {
    $_SESSION['team']['id'] = $team['id'];
    $_SESSION['team']['teamname'] = $team['teamname'];
    $_SESSION['team']['access'] = $team['access'];
    $_SESSION['team']['name'] = $team['name'];
    $_SESSION['team']['name2'] = $team['name2'];
    $_SESSION['team']['score'] = $team['score'];
    $_SESSION['loggedin'] = TRUE;
  } else {
    $_SESSION['msg'] = "Incorrect Username / Password";
  }
  redirectTo(SITE_URL);
} else if (isset($_GET['logoff'])) {
  session_destroy();
  session_regenerate_id();
  redirectTo(SITE_URL);
} else if (isset($_SESSION['loggedin'])) {
  if (isset($_POST['answer'])) {
    if (isset($_SESSION['lastime']) && $_SESSION['lasttime'] > time() - 3) {
      redirectTo(SITE_URL);
    }
    $_SESSION['lasttime']=time();
    $correct = DB::findOneFromQuery("select * from level where levelcode = (select level from users where id = " . $_SESSION['team']['id'] . ")");
    if ($correct['answer'] == $_POST['value']) {
      $score = DB::findOneFromQuery("select score from users where id = " . $_SESSION['team']['id']);
      $sco = $score['score'] + $correct['score'];
      $_SESSION['team']['score'] = $sco;
      DB::update('users', array('level' => $correct['levelcode'] + 1, 'score' => $sco), "id = " . $_SESSION['team']['id']);
    }
    redirectTo(SITE_URL);
  } else if (isset($_POST['save'])) {
    $ans = $_POST;
    $question = DB::findOneFromQuery("select count(id) as total from mcq");
    unset($ans['save']);
    $mcqans = "";
    for ($i = 1; $i <= $question['total']; $i++) {
      if (isset($ans[$i])) {
        $mcqans .=$ans[$i];
      }
      $mcqans .= ",";
    }
    DB::update('users', array('mcq_answer' => $mcqans), "id = " . $_SESSION['team']['id']);
  } else if (isset($_POST['mcqans'])) {
    $ans = $_POST;
    $question = DB::findOneFromQuery("select count(id) as total from mcq");
    unset($ans['save']);
    $mcqans = "";
    for ($i = 1; $i <= $question['total']; $i++) {
      if (isset($ans[$i])) {
        $mcqans .=$ans[$i];
      }
      $mcqans .= ",";
    }
    $correct = DB::findAllFromQuery("select correct from mcq");
    $user = DB::findOneFromQuery("select cheat from users where id = " . $_SESSION['team']['id']);
    $i = 1;
    $score = 0;
    foreach ($correct as $val) {
      if (isset($ans[$i]) && $ans[$i] == $val['correct']) {
        $score += 4 * $user['cheat'];
      } else if (isset($ans[$i]) && $ans[$i] != $val['correct']) {
        $score -= 1;
      }
      $i++;
    }
    $_SESSION['team']['score'] = $score;
    DB::update('users', array('mcq_answer' => $mcqans, 'score' => $score, 'level' => 1), "id = " . $_SESSION['team']['id']);
  } else if (isset($_POST['c'])) {
    DB::update('users', array('cheat' => 0), "id = " . $_SESSION['team']['id']);
  }
}
?>
