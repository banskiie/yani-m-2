<?php

if (isset($_POST['add'])) {
    require '../db/database.php';

    $name = $_POST['pkg_name'];
    $price = $_POST['pkg_price'];
    $desc = $_POST['pkg_desc'];

    $sql = "INSERT INTO package (pkg_name,pkg_price,pkg_desc) 
    VALUES ('$name', '$price', '$desc')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../views/admin/admin-packages.php?added-package");
    } else {
        header("Location: ../../views/admin/admin-packages.php?package-not-added");
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} 

else if (isset($_POST['remove'])) {
    require '../db/database.php';
    $id = $_GET['delete'];
    $sql = "DELETE FROM package WHERE pkg_id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../../views/admin/admin-packages.php");
    } else {
        echo "error";
    }
}
