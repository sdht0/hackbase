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
                        <li><a><b>Score:</b> <?php echo $_SESSION['team']['score']; ?></a></li>
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
            $str = 'files/home.php';
            require $str;
            ?>
        </div>
    </body>
</html>
