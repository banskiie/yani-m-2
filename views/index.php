<?php
require '../includes/client/head.php';
@session_start();
?>

<head>
  <link rel="stylesheet" href="../styles/home.css" />
</head>

<?php
require '../includes/client/header.php'
?>

<div class="container-fluid d-flex align-items-center justify-content-center">
  <div id="home-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-pause="false" data-keyboard="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/carousel/img1.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="../images/carousel/img2.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="../images/carousel/img3.jpg" class="d-block w-100" alt="..." />
      </div>
    </div>
  </div>
</div>
<hr />

<div id="home-intro-section" class="container-fluid d-flex flex-column align-items-center justify-content-center">
  <div class="intro-paragraph">
    We are a team consisting of young professionals from all walks of life
    gathered by one great passion in service and anything related to love
    and tying the knot! We all have in our heart one goal - to provide
    quality, systematic and <strong>REAL</strong>ational services to all.
  </div>
  <div class="intro-paragraph">
    Weddings have been one of the most celebrated gathers in the Filipino
    Culture. And we consider the details, preparation, and the coming
    together of everything envisioned as an art to be done precisely,
    systematically, and heartfully. <strong>WE COME</strong> in service and
    <strong>WE DO</strong> with sincere goal driven desires.
  </div>
  <div class="intro-paragraph">
    The past year has been a good one for us. The countless learning we
    experienced humbled us through and inspired our brand to always strive
    for growth, improvement, and continuous geniune work.
  </div>
  <div class="intro-paragraph">
    <strong> We'd love to celeberate with you!</strong>
  </div>
  <a id="meet-team-btn" href="about.php#team-cards">MEET THE TEAM</a>
</div>
<hr />

<?php
require '../includes/client/footer.php'
?>