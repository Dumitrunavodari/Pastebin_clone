<?php
  require 'includes/dataBaseConnect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="login">
      <h1>Welcome!</h1>
      <div class="container">
        <form method="POST" action="includes/login.inc.php">
          <input type="email" name="email" placeholder="email"><br>
          <input type="password" name="password" placeholder="password"><br>
          <input type="Submit" value="Login">
          <?php
            if(isset($_GET["info"]) && $_GET["info"] == "allFieds") {
              echo "<h2>All fields are mandatory.</h2>";
            } else if (isset($_GET["info"]) && $_GET["info"] == "noEmail") {
              echo "<h2>This user does not exists.</h2>";
            } else if (isset($_GET["info"]) && $_GET["info"] == "wrongPassword") {
              echo "<h2>Wrong password.<h2>";
            }
          ?>
        </div>
        </form>
      </div>
  </body>
</html>
