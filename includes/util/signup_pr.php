<?php

if (isset($_POST['submit'])) {
    require '../db/database.php';

    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $contno = $_POST['contno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        header("Location: ../../views/signup.php?passwords_do_not_match");
        exit();
    } else {
        $sql = "SELECT clnt_email FROM client WHERE clnt_email = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../views/signup.php?sql_error");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                header("Location: ../../views/signup.php?email_already_taken");
                exit();
            } else {
                $sql = "INSERT INTO client (clnt_fn, clnt_mn, clnt_ln, clnt_add, clnt_contno, clnt_email, clnt_pass) VALUES (?,?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../../views/signup.php?sql_error");
                    exit();
                } else {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssssss", $first_name, $middle_name, $last_name, $address, $contno, $email, $hashed_password);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../../views/signup.php?success=registered");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
