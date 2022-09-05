<?php

if (isset($_POST['submit'])) {
    require '../db/database.php';
    $id = $_GET['update'];
    $sql = "UPDATE inquiry SET inq_status = '0' WHERE inq_id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../../views/admin/admin-inquiries.php");
    } else {
        echo "error";
    }
}