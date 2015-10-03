<?php
require "config.php";

if (isset($_GET['d'])) {
  unlink("uploads/" . $_GET['d']);
  redirectTo("uppload.php");
}

if (isset($_POST['submit'])) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
  } else {
    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_COOKIE["PHPSESSID"] . "." . $_FILES["file"]["name"]);
  }
  redirectTo("uppload.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin</title>

    <link href="bootstrap.min.css" rel="stylesheet">

    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form method="post" class="form-signin" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Upload</h2>
        <input type="file" name="file" id="file"><br>
        <input type="submit" name="submit" value="Submit">
      </form>
      <?php
      $files2 = scandir("uploads", 1);
      if(!isset($_COOKIE["PHPSESSID"])) { $_COOKIE["PHPSESSID"]="sad"; }
      foreach ($files2 as $value) {
        if (in_array($value, array(".", "..")) || (strpos($value,$_COOKIE["PHPSESSID"]) === false && $value != "favicon.ico"))
          continue;
        echo "<a href='uploads/" . $value . "'>" . $value . "</a>";
        if ($value != "favicon.ico")
          echo "<a href='?d=$value'> delete</a>";
        echo "<br />";
      }
      ?>
    </div>
  </body>
</html>
