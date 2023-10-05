<?php
  $servername = "linux23";
  $username = "znucompu_znucomputer";
  $password = "Ah-As-22-ij";
  $dbname = "znucompu_znu";

  $connction = new mysqli($servername, $username, $password, $dbname);
  if(!$connction)
    die("could not connect".mysqli_connect_error());
  else
    echo "Connection established";

  $sql = "INSERT INTO `links` (`Semster`, `Lesson`, `Section`, `Date`, `Link`) VALUES
  (6, 'AI', 1, '2023-10-01', 'http://google.com'),
  (6, 'AI', 2, '2023-10-02', 'http://google.com');";
  
    
  if (mysqli_query($connction, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connction);
  }
    
  mysqli_close($connction);
?>