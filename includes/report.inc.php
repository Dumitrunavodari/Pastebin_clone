<?php
  if(!session_status()) {
    session_start();
  }
  require 'dataBaseConnect.php';


    $id = $_SESSION['id'];
    $sql = "SELECT title, myText FROM texts WHERE id = $id ORDER BY textNumber DESC";
    $result = mysqli_query($dataBaseConnect, $sql);
    $i = 0;
    while ($row = mysqli_fetch_row($result)) {
      $_SESSION["title".$i] = $row[0];
      $_SESSION["myText".$i] = $row[1];
      ++$i;
    }
