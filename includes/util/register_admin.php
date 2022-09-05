<?php

if (isset($_POST['submit'])) {
    require '../db/database.php';
    $admin_fn = $_POST['admin_fn'];
    $admin_mn = $_POST['admin_mn'];
    $admin_ln = $_POST['admin_ln'];
    $admin_contno = $_POST['admin_contno'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    $confirmPass = $_POST['confirmPassword'];

    if ($admin_password !== $confirmPass) {
        header("Location: ../../views/admin/admin-register.php?passwords_do_not_match");
        exit();
    } else {
        $sql = "SELECT admin_email FROM admin WHERE admin_email = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../views/admin/admin-register.php?sql_error");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $admin_email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                header("Location: ../../views/admin/admin-register.php?email_already_taken");
                exit();
            } else {
                $sql = "INSERT INTO admin (admin_fn, admin_mn, admin_ln, admin_contno, admin_email, admin_pass) VALUES (?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../../views/admin/admin-register.php?sql_error");
                    exit();
                } else {
                    $hashedPass = password_hash($admin_password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssssss", $admin_fn, $admin_mn, $admin_ln, $admin_contno, $admin_email, $hashedPass);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../../views/admin/admin-register.php?success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
