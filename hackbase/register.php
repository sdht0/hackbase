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
            ?>
            <div class="col-md-12">
                <div class="wrap-box">
                    <h2>Register</h2>
                    <form class="form-horizontal" action="<?php echo SITE_URL; ?>/process.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="teamname" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="data[teamname]" id="teamname" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="data[password]" id="password" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center><input class="btn btn-success btn-lg" type="submit" name='register' value="Register" /></center><br/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>