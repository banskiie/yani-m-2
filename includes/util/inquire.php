<?php

if (isset($_POST['submit'])) {
    require '../db/database.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contno = $_POST['contno'];
    $remark = $_POST['remark'];

    $sql = "INSERT INTO inquiry (inq_name, inq_email, inq_contno, inq_remark, inq_status) VALUES ('$name', '$email', '$contno', '$remark', true)";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../../views/contact.php?success=inquire-sent");
    } else {
        header("Location: ../../views/contact.php?error=inquiry-not-sent");
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
