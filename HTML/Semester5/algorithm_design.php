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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <? include './../Other/navbar.html'?>
  <header class="header about-header">

  </header>
  <section class="video-section">
    <h2 class="video-text">Video Player</h2>
    <div class="video-container">
      
      <div class="left">
        <div class="play-list">
          <a href=""><div class="part"><p>1</p></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
          <a href=""><div class="part"></div></a>
        </div>
      </div>
      <div class="right">
        <div class="video-player">
          <video class="video" controls>
            <!-- <source
              src="https://ir72.uploadboy.com/d/vqoaa9lfcwmc/sbne4dw4jax7hcohgixhrx665vhqa3a7gwysmxobezdy3atcqp4mezrzvmg36uq3b2jtp3td/Rec 0011.mp4"
              type="video/mp4"
            /> -->
            <source
              src="https://www.googleapis.com/drive/v3/files/12LF1KzePMy9MYwpnSS0qoskZJh1RDruH?alt=media&key=AIzaSyCq6g0g8IvXUzE88LloOuAJyQ1vHYRRnsM"
              type="video/webm"
            />
            <source
              src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4"
              type="video/mp4"
            />
            <p>Your browser doesn't support HTML5 video.</p>
          </video>
        </div>
        <div class="video-options"></div>
      </div>
    </div>
  </section>
  <? include './../Other/footer.html'?>
</body>
</html>