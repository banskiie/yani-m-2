<?php

if (isset($_POST['add'])) {
    require '../db/database.php';

    $name = $_POST['supp_name'];
    $contno = $_POST['supp_contno'];
    $email = $_POST['supp_email'];
    $role = $_POST['supp_role'];
    $add = $_POST['supp_add'];

    $sql = "INSERT INTO supplier (supp_name,supp_contno,supp_email,supp_role,supp_add) 
    VALUES ('$name', '$contno', '$email', '$role','$add')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../views/admin/admin-suppliers.php?added-package");
    } else {
        header("Location: ../../views/admin/admin-suppliers.php?package-not-added");
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} 

else if (isset($_POST['remove'])) {
    require '../db/database.php';
    $id = $_GET['delete'];
    $sql = "DELETE FROM supplier WHERE supp_id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../../views/admin/admin-suppliers.php");
    } else {
        echo "error";
    }
}
