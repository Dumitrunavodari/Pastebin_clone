<?php
  require 'includes/dataBaseConnect.php';
  session_start();
  if(isset($_SESSION['id'])) {
    header("Location: index.php");
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Paste bin</title>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="logo">
          <img src="images/output-onlinepngtools.png">
        </div>
        <div class="navigator">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="signup.php">Sign up</a></li>
          </ul>
        </div>
      </div>
      <div class="login">
        <h1>Welcome!</h1>
        <div clas="container">
          <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="surname" placeholder="Surname"><br>
            <input type="text" name="firstName" placeholder="First name"><br>
            <input type="email" name="email" placeholder="email"><br>
            <input type="password" name="password" placeholder="password"><br>
            <input type="submit" value="Sign up">
          </form>
          <?php
            if(isset($_GET['info']) && $_GET['info'] === "ok") {
              echo '<p style="text-align: center; color: #1de927; font-size: 20px;">The account has been created</p>';
            } else if (isset($_GET['info']) && $_GET['info'] === "error") {
              echo '<p style="text-align: center; color: #f50b48; font-size: 20px;">All fields are mandatory</p>';
            } else if (isset($_GET['info']) && $_GET['info'] === "duplicate") {
              echo '<p style="text-align: center; color: #f50b48; font-size: 20px;">Email already exists.</p>';
            }
          ?>
        </div>
      </div>
    </div>




  </body>
</html>
