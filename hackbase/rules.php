<?php
include 'config.php';
?>
<html>
  <head>
    <title>Hackathon :: HackBase</title>
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL; ?>/bootstrap.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL; ?>/style.css" media="screen" />
    <script type="text/javascript" src="<?php echo JS_URL; ?>/jquery.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL; ?>/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL; ?>/plugin.js"></script>
    <link rel='shortcut icon' href='<?php echo IMAGE_URL; ?>/postanonimo.png' />
  </head>
  <body>
    <nav class='navbar navbar-default navbar-fixed-top' role='navigation'>
      <div class='container'>
        <ul class="nav navbar-nav">
          <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
          <li><a href="<?php echo SITE_URL; ?>/rules.php">Rules</a></li>
          <li><a href="<?php echo SITE_URL; ?>/leaderboard.php">Leader Board</a></li>
        </ul>
        <?php if (isset($_SESSION['loggedin'])) { ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a><b>Balance:</b> $<?php echo $_SESSION['team']['score']; ?></a></li>
            <li><a href="<?php echo SITE_URL . "/process.php?logoff"; ?>">Logout</a></li>
          </ul>
        <?php } ?>
      </div>
    </nav>
    <div class='container'>
      <?php if (isset($_SESSION['msg'])) { ?>
        <div class="alert alert-danger" style="margin-top: 20px;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <center><?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            ?></center>
        </div>
        <?php
      }
      ?>
      <div class="col-md-12">
        <div class="wrap-box" >
          <h2>Rules</h2>
          <div style="padding:20px">
            <h3>Level 0</h3>
            <p>Rapid fire MCQ questions to be answered in 15 minutes.</p>
            <h3>Level 1+</h3>
            <p>Our story starts with the evil overlord Mauron trying to take over the World (again). But he has has a different stategy this time.
              Instead of going on an all out attack, he has decided to search for the "Answer to Life, Universe and Everything", a legendary
              piece of knowlege said to give its acquirer unprecedented power.</p><p>

              The Answer had been safely hidden away in the secret base of the World Hackers Association. Mauron attacked the base, and
              killed all but one of the seven Hackers entrusted with the Secret to the Answer's position. He has captured the remaining Hacker
              and intends to make him speak out the Secret by any means.</p><p>

              The Association is sure that the Hacker will prefer to die before revealing anything. However, Mauron has many evil tools, and may eventually
              be successful in making him talk. So the Association has decided that its safest to retrieve the Answer and then destroy the base.
            </p><p>
              Thus, the mission to retrieve the Answer, and move it to safety has been entrusted to you. Will you be able to manage it?
            </p><p>
              What you know about the Secret:
            <ul>
              <li> There are n < 20 levels protecting the Answer, at the end of which the Answer lies.</li><li>
                You have only 03:00 hrs to complete your mission and escape, after which the base will be destroyed.</li><li>
                Look for the clues everywhere (code, comments, cookies, headers), and keep them in mind. Clues in one level may come handy in later levels.</li><li>
                Be sure to find out what the servers are for. There may be hidden ports and services running.</li></p>
            </ul> </div>  </div>
      </div>
    </div>
  </body>
</html>