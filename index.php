<?php
  session_start();
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
          <img src="images/logo.png">
        </div>
        <div class="navigator">
          <ul>
            <li><a href="index.php">Home</a></li>
            <?php
              if(!isset($_SESSION['id'])) {
                echo '<li><a href='.'"signup.php">Sign up</a></li>';
              }
             ?>
          </ul>
        </div>
      </div>
    </div>
    <?php
      if (!isset($_SESSION['id'])) {
        include('login.php');
      } else {
          include('personal.php');
      }
    ?>








  </body>
</html>
