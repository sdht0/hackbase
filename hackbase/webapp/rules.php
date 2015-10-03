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
          <li><a href="<?php echo SITE_URL; ?>/rules.php">The Quest</a></li>
          <li><a href="<?php echo SITE_URL; ?>/leaderboard.php">Leader Board</a></li>
        </ul>
        <?php if (isset($_SESSION['loggedin'])) { ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a><b>Balance:</b> <?php echo $_SESSION['team']['score']; ?></a></li>
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
            <p>Our story starts with the evil overlord Mauron trying to take over the World (again). But he has has a different stategy this time.
              Instead of going on an all out attack, he has decided to search for the "Answer to Life, Universe and Everything", a legendary
              piece of knowlege said to give its owner unprecedented power.</p><p>

              The Answer had been safely stowed away in a secret base of the World Hackers Legion, and only a secret group of seven top Hackers knew the its location. However, by means of some unknown dark magic, Mauron was able to find and kill six of the Hackers and make the seventh Hacker a prisoner in his Evil Lands, where he intends to make him speak out the location of the Answer by any means.</p><p>

              While the Hacker can be trusted to protect the Answer with his life, Mauron has many evil tools, and may eventually be successful in gaining some information. So the Legion has decided that the safest path would be to retrieve the Answer and destroy the base before Mauron can make a move.
            </p><p>
              The mission to retrieve the Answer safely has now been entrusted to you. Are you worthy enough for the quest?
            </p><p>
            Information relevant to your quest:
            <ul>
              <li> There are n < 20 levels protecting the Answer, at the end of which the Answer lies.</li><li>
                You have only 03:00 hrs to complete your mission and escape, after which the base will be destroyed.</li><li>
                Use the internet for tools and hints.</li><li>
                Look for the clues everywhere (code, comments, cookies, headers), and keep them in mind. Clues in one level may come handy in later levels.</li><li>
                Be sure to find out what the servers are for. There may be hidden ports and services running.</li></p>
            </ul> </div>  </div>
      </div>
    </div>
  </body>
</html>