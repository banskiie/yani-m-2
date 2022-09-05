<?php
require '../includes/client/head.php';
require '../includes/util/popup.php';
@session_start();
?>

<head>
  <link rel="stylesheet" href="../styles/contact.css" />
</head>

<?php
require '../includes/client/header.php'
?>

<div id="contact-section" class="container-fluid d-flex flex-row align-items-center justify-content-center">
  <div class="col d-flex align-items-center justify-content-center">
    <img src="../images/services/intima-boda.jpg" alt="" />
  </div>
  <div id="contact-form" class="col d-flex flex-column align-items-center justify-content-center">
    <h2>Get in touch</h2>
    <form action="../includes/util/inquire.php" method="post">
      <div class="d-flex flex-column">
        <label>Name</label><input type="text" name="name" required />
      </div>
      <div class="d-flex flex-column">
        <label>Email</label><input type="email" name="email" required />
      </div>
      <div class="d-flex flex-column">
        <label>Mobile Number</label><input type="tel" name="contno" required />
      </div>
      <div class="d-flex flex-column">
        <label>Remarks</label><textarea name="remark" required></textarea>
      </div>
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </form>
    <?php  ?>
  </div>
</div>
<?php
require '../includes/client/footer.php'
?>