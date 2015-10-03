<?php
if (isset($_SESSION['loggedin'])) {
  $level = DB::findOneFromQuery("select * from level where levelcode = (select level from users where id = " . $_SESSION['team']['id'] . ")");
//  if($level['level']==16) {
//    
 

//        <div class='wrap-box'>
//          <div style='padding: 10px;'>
//          Congratulations. You are now a pR0_H@ck3R!  
//          </div>
//          </div>
  //<?php
//  }
// else  
   if (isset($_GET['tab']) && $level['url'] == $_GET['tab']) {
    if ($level['content'] == "") {
      require 'files/' . $level['url'] . '.php';
    } else {
      foreach ($_COOKIE as $k => $value) {
        if($k=="PHPSESSID") {
          continue;
        }
        setcookie($k, null, -1);
      }
      if ($level['cookie'] != "") {
        foreach (explode(";", $level['cookie']) as $value) {
          $r = explode("=", $value);
          setcookie($r[0], $r[1], time() + 1000);
        }
      }
      ?>
      <div class='wrap-box'>
        <div style='padding: 10px;'>
          <form action="<?php echo SITE_URL; ?>/process.php" method='post'>
            <center>
              <h3><?php echo $level['content']; ?></h3>
              <input class='form-control' style='width: 250px; display: inline-block' type='text' name ='value' /> <input class='btn btn-success' type='submit' name='answer' value='Submit' />
            </center>
          </form>
        </div>
        <?php echo $level['comment'] != "" ? "<!--" . $level['comment'] . "-->" : ""; ?>
      </div>
      <?php
    }
  } else {
    redirectTo(SITE_URL . "/" . $level['url']);
  }
} else {
  ?>
  <div align='center'>
    <img src='<?php echo IMAGE_URL; ?>/bitotsav.png' style='height: 80px;' />
    <img src='<?php echo IMAGE_URL; ?>/logo.svg' style='height: 80px;' />
    <img src='<?php echo IMAGE_URL; ?>/ibm.png' style='height: 50px;' />
  </div>
  <div class='col-md-offset-3 col-md-6'>
    <div class='wrap-box'>
      <h2>HomeBase Login</h2>
      <div style='text-align: center; padding: 10px;'>
        <img src='<?php echo IMAGE_URL; ?>/postanonimo.png' style='height: 150px; margin: 20px;' /><br/>
        <form action='<?php echo SITE_URL; ?>/process.php' method='post'>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control input-lg" name='data[teamname]' type="text" placeholder="Teamname">
          </div><br/>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control input-lg" name='data[password]' type="password" placeholder="Password">
          </div><br/>
          <div class="btn-group">
            <input class='btn btn-primary btn-lg ' type='submit' value='Login' name='login' />
            <a class="btn btn-success btn-lg" href="<?php echo SITE_URL; ?>/register.php">Register</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
}
?>