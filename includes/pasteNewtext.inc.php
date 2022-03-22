<?php
  session_start();
  require 'dataBaseConnect.php';

  if(!empty($_POST['newText'])  &&  isset($_POST['newText']) && !empty($_POST['newTitle']) &&  isset($_POST['newTitle'])) {
    $newtext = $_POST['newText'];
    $newTitle = $_POST["newTitle"];
    $id = $_SESSION['id'];

    $sql = "INSERT INTO texts (id, title, myText) VALUES ('$id', '$newTitle','$newtext')";
    $result = mysqli_query($dataBaseConnect, $sql);
      header("Location: ../index.php?info=ok");
  } else {
    header("Location: ../index.php?info=error");
  }
  die();
