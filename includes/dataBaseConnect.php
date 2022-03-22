<?php

$dataBaseConnect = mysqli_connect('localhost', 'root', '', 'paste_bin');
if(!$dataBaseConnect) {
  die(mysqli_connect_error());
}
