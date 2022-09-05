<?php

if (isset($_POST['submit'])) {
    require '../db/database.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM client WHERE clnt_email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../views/login.php?sql_error");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $passCheck = password_verify($password, $row['clnt_pass']);
            if ($passCheck == false) {
                header("Location: ../../views/login.php?invalid_password");
                exit();
            } elseif ($passCheck == true) {
                session_start();
                // how
                $_SESSION['sessionId'] = $row['clnt_id'];
                $_SESSION['sessionFirst'] = $row['clnt_fn'];
                $_SESSION['loggedIn'] = true;
                $_SESSION['role'] = "client";
                $sql = "INSERT INTO user_log (clnt_id, ulog_act) VALUES ('{$_SESSION['sessionId']}','Logged In')";
                mysqli_query($conn, $sql);
                header("Location: ../../views/client.php?" . $_SESSION['sessionId']);
                exit();
                //how
            } else {
                header("Location: ../../views/login.php?invalid_password");
                exit();
            }
        } else {
            $sql = "SELECT * FROM admin WHERE admin_email = ?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../../views/login.php?sql_error");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    $passCheck = password_verify($password, $row['admin_pass']);
                    if ($passCheck == false) {
                        header("Location: ../../views/login.php?invalid_password");
                        exit();
                    } elseif ($passCheck == true) {
                        session_start();
                        $_SESSION['sessionId'] = $row['admin_id'];
                        $_SESSION['sessionFirst'] = $row['admin_fn'];
                        $_SESSION['loggedIn'] = true;
                        $_SESSION['role'] = "admin";
                        $sql = "INSERT INTO user_log (admin_id, ulog_act) VALUES ('{$_SESSION['sessionId']}','Logged In')";
                        mysqli_query($conn, $sql);
                        header("Location: ../../views/admin/admin-inquiries.php?user={$_SESSION['sessionId']}");
                        exit();
                        //how
                    } else {
                        header("Location: ../../views/login.php?invalid_password");
                        exit();
                    }
                } else {
                    header("Location: ../../views/login.php?no_such_user");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../../views/login.php?error=access_forbidden");
    exit();
}
