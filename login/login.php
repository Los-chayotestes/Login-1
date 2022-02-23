<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <?php require'partials/link.php' ?>
  </head>
  <body>
    <?php require 'partials/header.php' ?>
    <h1>Login</h1>
    <span> or <a href="signup.php" >Sing Up</a></span>

    <form action="loginC.php" method="post">
      <input type="text" name="name" placeholder="Enter your name">
      <input type="password" name="password" placeholder="Enter your password">
      <input type="submit" value="Send">
    </form>
  </body>
</html>
