<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Algorithm Design </title>
  <link rel="shortcut icon" type="image/jpg" href="/image/ZNU.png"/>
  <link rel="stylesheet" href="/CSS/navbar.css">
  <link rel="stylesheet" href="/CSS/header.css">
  <link rel="stylesheet" href="/CSS/footer.css">
  <link rel="stylesheet" href="/CSS/fonts.css">
  <link rel="stylesheet" href="/CSS/video.css">
  <link rel="stylesheet" href="/CSS/passage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php include './../Other/navbar.html'?>
  <header class="header about-header">

  </header>
  <section class="passage-section">
    <h2 class="passage-text">Passage</h2>
    <div class="passage-container">
      <div class="passage-img-div">
        <img class="passage-image" src="/image/lesson-img/algorithm-design.jpg" alt="">
      </div>
      <div class="passage-text-div">
        <p class="passage-p">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque eaque iste, molestiae sint illo commodi! Hic, dolorem assumenda ducimus, nihil inventore dignissimos, exercitationem rerum consectetur facere commodi maiores sunt perferendis. Nulla nam esse, sed ipsum laudantium maiores soluta culpa ratione voluptatum minima ab molestias voluptates? Laboriosam voluptates quasi quaerat hic nesciunt aspernatur facere minus eligendi explicabo tenetur molestias nulla necessitatibus libero minima repellendus ducimus voluptatum obcaecati praesentium pariatur temporibus, distinctio, dolor fuga quas odio. Ea dolores id consectetur non esse neque impedit quo tempora deserunt unde, eaque accusantium at! Saepe et delectus dicta architecto, qui nobis corrupti placeat sit exercitationem.
        </p>
      </div>
    </div>
  </section>
  <section class="video-section">
    <h2 class="video-text">Video Player</h2>
    <div class="video-container">
      <div class="left">
        <div class="play-list">
          <div class="part" data-lesson="AI" data-section="1">1</div>
          <div class="part">1</div>
          <div class="part">1</div>
          <div class="part">1</div>
          <div class="part">1</div>
          <div class="part">1</div>
          <div class="part">1</div>
          <div class="part">1</div>
          <div class="part">1</div>
        </div>
      </div>
      <div class="right">
        <div class="video-player">
          <video id="video" class="video" poster="/image/Lib.jpg" controls>
            <!-- <source
              src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4"
              type="video/mp4"
            /> -->
            <!-- <source
              src="https://www.googleapis.com/drive/v3/files/12LF1KzePMy9MYwpnSS0qoskZJh1RDruH?alt=media&key=AIzaSyCq6g0g8IvXUzE88LloOuAJyQ1vHYRRnsM"
              type="video/webm"
            />
            <source
              src="http://fileshare.znu.ac.ir/s/yyqC9h6MB7hNe6E/download"
              type="video/mp4"
            /> -->
            <p>Your browser doesn't support HTML5 video.</p>
          </video>
        </div>
        <div class="video-options"></div>
      </div>
    </div>
  </section>
  <?php include './../Other/footer.html'?>
  <script src="/JS/getLink.js"></script>
</body>
</html>