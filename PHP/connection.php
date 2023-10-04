<?php
  $connction = new mysqli("localhost","root","Ah-As-22","links");
  if(!$connction)
    die("could not connect".mysqli_connect_error());
  else
    echo "Connection established";
?>