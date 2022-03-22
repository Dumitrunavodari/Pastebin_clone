<?php
  require 'includes/report.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <form class="" action="includes/report.inc.php>" method="post">
        <?php
          $i = 0;
          while (!empty($_SESSION["myText".$i]) && isset($_SESSION["myText".$i]) && !empty($_SESSION["title".$i]) && isset($_SESSION["title".$i])) {
            $bullet = $i + 1;
            echo '
              <p style="text-align: left; color: rgb(5, 27, 254); font-size: 20px;">'.$bullet.': Title: '.$_SESSION["title".$i].'</p>
              <p style="text-align: left; color: rgb(5, 27, 254); font-size: 20px; margin-left: 20px;"> Text: '.$_SESSION["myText".$i].'</p>

              ';
            ++$i;
          }
       ?>
      </form>

    </div>
  </body>
</html>
