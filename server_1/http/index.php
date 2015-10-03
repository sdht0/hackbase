<?php
require "config.php";

if (isset($_POST['username'])) {
  $res = DB::findOneFromQuery("select * from users where urname=" . DB::escape($_POST['username']) . " and (password='" . $_POST['password'] . "')");
  if ($res) {
    $_SESSION['id'] = $res['id'];
    redirectTo("user.php");
  } else {
    redirectTo("index.php");
  }
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

      <form method="post" class="form-signin">
        <h2 class="form-signin-heading">Personal Diary</h2>
        <input name="username" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
  </body>
</html>
