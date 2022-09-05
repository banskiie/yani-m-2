<?php
if (isset($_GET['success'])) {
    echo '<script>alert("Account Registered!")</script>';
} else if (isset($_GET['passwords_do_not_match'])) {
    echo '<script>alert("Passwords do not match!")</script>';
} else if (isset($_GET['sql_error'])) {
    echo '<script>alert("SQL error")</script>';
} else if (isset($_GET['email_already_taken'])) {
    echo '<script>alert("Email Already Taken!")</script>';
} else if (isset($_GET['invalid_password'])) {
    echo '<script>alert("Invalid Password!")</script>';
} else if (isset($_GET['no_such_user'])) {
    echo '<script>alert("User does not exist!")</script>';
} else if (isset($_GET['success'])) {
    echo '<script>alert("Inquiry sent!")</script>';
}
