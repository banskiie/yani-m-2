<?php
session_start();
if (isset($_SESSION["role"]) != "admin" && $_SESSION['loggedIn'] != true) {
  header('Location: ../../views/index.php');
}
?>