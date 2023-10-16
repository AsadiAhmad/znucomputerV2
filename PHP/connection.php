<?php
  $lines = file('../File/localInfo.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

  $servername = $lines[0];
  $username = $lines[1];
  $password = "";
  $dbname = $lines[2];

  $connction = new mysqli($servername, $username, $password, $dbname);

  if(!$connction)
    die("could not connect".mysqli_connect_error());
?>