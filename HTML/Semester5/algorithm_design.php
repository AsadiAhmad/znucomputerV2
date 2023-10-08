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
    <div class="header-div-text">
      <p class="header-text"> algorithm design</p>
    </div>
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
          <div class="part" data-lesson="compiler_design" data-section="1"><p class="section-txt">Section 1</p><p class="date-txt">1400/00/00</p></div>
          <div class="part" data-lesson="compiler_design" data-section="2">1</div>
          <div class="part" data-lesson="compiler_design" data-section="3">1</div>
          <div class="part" data-lesson="compiler_design" data-section="4">1</div>
          <div class="part">1</div>
          <div class="part">1</div>
          <div class="part">1</div>
          <div class="part">1</div>
          <div class="part">1</div>
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
</body>
</html>