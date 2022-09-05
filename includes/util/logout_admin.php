<?php
@session_start();
if (isset($_SESSION["role"]) == "admin" && $_SESSION['loggedIn'] == true) {
    require '../db/database.php';
    $sql = "INSERT INTO user_log (admin_id, ulog_act) VALUES ('{$_SESSION['sessionId']}','Logged Out')";
    mysqli_query($conn, $sql);
}
session_destroy();
header('Location: ../../views/index.php');
