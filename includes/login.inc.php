</<?php
  session_start();
  require 'dataBaseConnect.php';
  if(!empty($_POST['email']) && !empty($_POST['password']) && isset($_POST['email']) && isset($_POST['password'])) {
    $email = mb_strtolower($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($dataBaseConnect, $sql);
    $row = $result->fetch_assoc();

    if (!$row['email']) {
      header("Location: ../index.php?info=noEmail");
      die();
    } else if(!password_verify($password, $row['password'])) {
        header("Location: ../index.php?info=wrongPassword");
        die();
    } else {
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
    }
    header("Location: ../index.php");
    die();
  } else {
    header("Location: ../index.php?info=allFieds");
    die();

  }
