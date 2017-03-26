<?php

require_once "connect.php";

$username = 'admin';
$email = "admin@mailer.com";
$phone = "+123456789";
$password = "password";
$securePassword = password_hash($password, PASSWORD_DEFAULT);
$role = "admin";

$query ="INSERT INTO users (role, username, email, phone, password) VALUES".
        "('$role', '$username', '$email', '$phone', '$securePassword')";

mysqli_query($db, $query) or die(mysqli_error($db));

echo "Admin created.";

