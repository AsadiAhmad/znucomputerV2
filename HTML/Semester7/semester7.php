<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Semester 7 </title>
  <link rel="shortcut icon" type="image/jpg" href="/image/ZNU.png"/>
  <link rel="stylesheet" href="/CSS/navbar.css">
  <link rel="stylesheet" href="/CSS/header.css">
  <link rel="stylesheet" href="/CSS/footer.css">
  <link rel="stylesheet" href="/CSS/fonts.css">
  <link rel="stylesheet" href="/CSS/course.css">
  <link rel="stylesheet" href="/CSS/unselectable.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="unselectable">
  <?php include './../Other/navbar.html'?>
  <header class="header semester7-header">
    <div class="header-div-text">
      <p class="header-text"> Semester7 </p>
    </div>
  </header>
  <section class="course-section">
    <h2 class="course-section-text"> Courses </h2>
    <div class="course-container">
      <div class="row">
        <div class="course internet_engineering">
          <a href="/HTML/Semester7/internet_engineering.php">
            <img class="course-img" src="/image/lesson-img/internet-engineering.jpg" alt="Internet Engineering picture">
          </a>
          <p class="course-text">Internet Engineering</p>
        </div>
        <div class="course software_engineering">
          <a href="/HTML/Semester7/software_engineering.php">
            <img class="course-img" src="/image/lesson-img/software-engineering.jpg" alt="Software Engineering picture">
          </a>
          <p class="course-text">Software Engineering</p>
        </div>
      </div>
    </div>
  </section>
  <?php include './../Other/footer.html'?>
  <script src="/JS/blindUser.js"></script>
</body>
</html>