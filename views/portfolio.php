<?php
require '../includes/client/head.php';
@session_start();
?>

<head>
  <link rel="stylesheet" href="../styles/portfolio.css" />
</head>

<?php
require '../includes/client/header.php'
?>

  <div id="portfolio-intro" class="container-fluid d-flex flex-column align-items-center justify-content-center">
    <div id="intro-img" class="container-fluid d-flex align-items-center justify-content-center">
      <img src="../images/top/portfolio.jpg" alt="" />
    </div>
    <div>
      <h2>Portfolio</h2>
    </div>
  </div>
  <hr />

  <?php
require '../includes/client/footer.php'
?>