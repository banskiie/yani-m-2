<?php
require '../includes/client/head.php';
@session_start();
?>

<head>
  <link rel="stylesheet" href="../styles/services.css" />
  <link rel="stylesheet" href="../styles/contact.css">
  <script src="../scripts/script.js" defer></script>
</head>

<?php
require '../includes/client/header.php'
?>

<div id="services-intro" class="container-fluid d-flex flex-column align-items-center justify-content-center">
  <div id="intro-img" class="container-fluid d-flex align-items-center justify-content-center">
    <img src="../images/top/services.jpg" alt="" />
  </div>
  <div>
    <h2>Services</h2>
  </div>
</div>

<div id="main-desc" class="container-fluid d-flex flex-column align-items-center justify-content-center">
  <div id="main-desc-text">
    <p>
      Just got engaged and no idea of what to do next? We got you covered!
      Our team will provide you the service to get everything started from
      scratch to finish.
    </p>
    <p>You deserve the best hassle-free wedding experience!</p>
  </div>
</div>

<div id="services-tab" class="container-fluid d-flex flex-column align-items-center justify-content-center">
  <h1>Our Offerings</h1>
  <div class="container-fluid d-flex flex-row align-items-center justify-content-center">
    <div id="intima-boda-card" class="col d-flex flex-column align-items-center justify-content-center">
      <img src="../images/services/intima-boda.jpg" alt="" />
      <p id="intima-boda-title">intima boda</p>
    </div>
    <div id="full-card" class="col d-flex flex-column align-items-center justify-content-center">
      <img src="../images/services/full.jpg" alt="" />
      <p id="full-title">full day</p>
    </div>
    <div id="otd-card" class="col d-flex flex-column align-items-center justify-content-center">
      <img src="../images/services/otc.jpg" alt="" />
      <p id="otd-title">on-the-day</p>
    </div>
  </div>
</div>

<hr />

<div id="details" class="container-fluid d-flex flex-column align-items-center justify-content-center">
  <img src="../images/service-details/pricing.png" alt="" />
  <img src="../images/service-details/full-otc-details.png" alt="" />
  <img src="../images/service-details/intima-boda-details.png" alt="" />
</div>

<?php
require '../includes/client/footer.php'
?>