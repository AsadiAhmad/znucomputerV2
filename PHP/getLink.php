<?php
  require_once 'connection.php';

  // Get the lesson ID from the query string
  $lesson = $_GET['lesson'];
  $section = $_GET['section'];

  // Fetch the video link from the database
  $sql = "SELECT Link FROM links WHERE Lesson = '$lesson' AND Section = '$section';";
  $result = $connction->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $videoLink = $row['Link'];
    echo $videoLink;
  } else {
    echo "Video link not found";
  }

  $connction->close();
?>
