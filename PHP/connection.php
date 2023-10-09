<?php
  //$lines = file('../File/localInfo.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

  $servername = "linux23";
  $username = "znucompu_znucomputer";
  $password = "Ah-As-22-ij";
  $dbname = "znucompu_znu";

  $connction = new mysqli($servername, $username, $password, $dbname);

  if(!$connction)
    die("could not connect".mysqli_connect_error());
?>