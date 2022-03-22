

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color: rgb(162, 224, 224);">
    <div class="usernameDiv" >
      <form action="includes/logout.inc.php" style="text-align: left; color: rgb(164, 178, 198); font-family: serif; font-size: 20px;">
        <?php
          echo '<p style="text-align: left; color: rgb(5, 27, 254); font-size: 20px;">User: '.$_SESSION["email"].'</p>';
         ?>
        <input type="submit"  value="Logout">
      </form>
    </div>
    <div class="personalContainer">
      <form action="includes/pasteNewText.inc.php" method="POST" >
        <?php
          if(isset($_GET['info']) && $_GET['info'] === "ok") {
            echo '<p style="text-align: left; color: rgb(43, 121, 81); font-size: 20px;">Message has been saved.</p>';
          } else if (isset($_GET['info']) && $_GET['info'] === "error") {
            echo '<p style="text-align: left; color: #f50b48; font-size: 20px;">All fields are mandatory.</p>';
          }
        ?>
        <input type="text" style="width: 180px; min-height: 25px;" name="newTitle" placeholder="Title"><br>
        <textarea type="text" style="width: 500px; min-height: 80px;" name="newText" placeholder="Your new text"></textarea>
        <input type="submit" name="save" value="Save text" style="background-color: rgb(162, 224, 224); padding-bottom: 5px;">
        <?php
          include('report.php');
        ?>
      </form>
    </div>
  </body>
</html>
