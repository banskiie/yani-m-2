<?php


if (isset($_POST['submit'])) {
    require '../db/database.php';
    $id = $_GET['delete'];
    $sql = "DELETE FROM staff WHERE staff_id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../../views/admin/admin-staff.php");
    } else {
        echo "error";
    }
}
