<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title;?></title>
  <link rel="shortcut icon" type="image/jpg" href="/image/ZNU.png"/>
  <link rel="stylesheet" href="/CSS/navbar.css">
  <link rel="stylesheet" href="/CSS/header.css">
  <link rel="stylesheet" href="/CSS/footer.css">
  <link rel="stylesheet" href="/CSS/fonts.css">
  <link rel="stylesheet" href="/CSS/video.css">
  <link rel="stylesheet" href="/CSS/passage.css">
  <link rel="stylesheet" href="/CSS/unselectable.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="unselectable">
  <?php include './../Other/navbar.html'?>
  <header class="<?php echo $header_class;?>">
    <div class="header-div-text">
      <p class="header-text"> <?php echo $header_name;?> </p>
    </div>
  </header>
  <section class="passage-section">
    <h2 class="passage-text">Passage</h2>
    <div class="passage-container">
      <div class="passage-img-div">
        <img class="passage-image" src="<?php echo $image_link;?>" alt="">
      </div>
      <div class="passage-text-div">
        <p class="passage-p">
          <?php echo $passage;?>
        </p>
      </div>
    </div>
  </section>
  <section class="video-section">
    <h2 class="video-text">Video Player</h2>
    <div class="video-container">
      <div class="left">
        <div class="play-list">
          <?php htmlVideoGenerator($lesson_name, $count); ?>
        </div>
      </div>
      <div class="right">
        <div class="video-player">
          <video id="video" class="video" poster="/image/thumbnail/thumbnail.jpg" controls>
            <p>Your browser doesn't support HTML5 video.</p>
          </video>
        </div>
        <div class="video-options"></div>
      </div>
    </div>
  </section>
  <?php include './../Other/footer.html'?>
  <script src="/JS/getLink.js"></script>
  <script src="/JS/blindUser.js"></script>
</body>
</html>