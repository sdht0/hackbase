<?php
require "config.php";
if (!isset($_SESSION['id'])) {
  redirectTo("index.php?yo");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Personal Dairy</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <?php if ($_SESSION['id'] != 2) echo "<!--"; ?><li><a href="admin.php">Admin</a></li><?php if ($_SESSION['id'] != 2) echo "-->"; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>Entries</h1>
        <?php
        $res = DB::findAllFromQuery("select * from dairy where userid='" . $_SESSION['id'] . "'");
        foreach ($res as $value) {
          echo "<p>" . $value['content'] . "</p>";
        }
        ?>
      </div>

    </div><!-- /.container -->

  </body>
</html>
