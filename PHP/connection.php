<?php
  $servername = "znucomputer.ir";
  $username = "znucompu";
  $password = "Ah-As-22-ij";
  $dbname = "znucompu_znu";

  $connction = new mysqli($servername, $username, $password, $dbname);
  if(!$connction)
    die("could not connect".mysqli_connect_error());
  else
    echo "Connection established";
?>