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
  <h1>Login</h1>
  <form action="../includes/util/login_pr.php" method="post">
    <div class="container-fluid d-flex flex-column align-items-start justify-content-center">
      <label>Email</label><input type="email" name="email" required/>
      <label>Password</label><input type="password" name="password" required/>
      <button name="submit" type="submit" class="btn btn-primary">Login</button>
    </div>
  </form>
  <a href="signup.php">New User? Click here to register!</a>
</div>

<?php
require '../includes/client/footer.php'
?>