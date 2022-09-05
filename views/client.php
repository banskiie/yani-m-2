<?php
require '../includes/client/head.php';
require '../includes/util/popup.php';
@session_start();
if (isset($_SESSION["role"]) != "client" && $_SESSION['loggedIn'] != true) {
  header('Location: ../../views/index.php');
}
?>
<head>
  <link rel="stylesheet" href="../styles/client_profile.css?v=2" />
</head>
<?php
require '../includes/client/header.php'
?>
<div id=profile-page>
  <div id=info>
    <div>
      <h1>NAME</h1>
      <p>Address</p>     
    </div>
    <div>
      <a href="../includes/util/logout_client.php" class="menu-item bottom-item2">Logout</a>
    </div>
  </div>
  <div id=content>
    <div>
      <h1>NAME</h1>
    </div>
  </div>
</div>
<?php
require '../includes/client/footer.php'
?>