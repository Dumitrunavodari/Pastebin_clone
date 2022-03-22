</<?php
  require 'dataBaseConnect.php';

  if(!empty($_POST['surname']) && !empty($_POST['firstName']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $surname = $_POST['surname'];
    $firstName = $_POST['firstName'];
    $email = mb_strtolower($_POST['email']);
    $password = $_POST['password'];
    $paasworHashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (surname, firstName, email, password) VALUES('$surname', '$firstName','$email','$paasworHashed')";

    try {
      mysqli_query($dataBaseConnect, $sql);
      header ("Location: ../signup.php?info=ok");
    } catch (mysqli_sql_exception $e) {
        header ("Location: ../signup.php?info=duplicate");
    }
  } else {
    header ("Location: ../signup.php?info=error");
  }
