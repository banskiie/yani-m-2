<?php
require '../includes/client/head.php';
require '../includes/util/popup.php';
@session_start();
?>

<head>
  <link rel="stylesheet" href="../styles/login-signup.css?v=1" />
</head>

<?php
require '../includes/client/header.php'
?>

<div id="profile-login" class="container-fluid d-flex flex-column align-items-center justify-content-center">
  <h1>Create a New Account</h1>
  <form action="../includes/util/signup_pr.php" method="post">
    <div class="container-fluid d-flex flex-column align-items-start justify-content-center">
      <label>First Name</label><input type="text" name="first_name" required />
      <label>Middle Name</label><input type="text" name="middle_name" required />
      <label>Last Name</label><input type="text" name="last_name" required />
      <label>Address</label><input type="text" name="address" required />
      <label>Contact No.</label><input type="tel" name="contno" required />
      <label>Email</label><input type="email" name="email" required />
      <label>Password</label><input type="password" name="password" required />
      <label>Confirm Password</label><input type="password" name="confirm_password" required />
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
  </form>
  <?php  ?>
  <a href="login.php">Already have an account? Login!</a>
</div>

<?php
require '../includes/client/footer.php'
?>