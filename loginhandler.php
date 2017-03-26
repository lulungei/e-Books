<?php

require_once "session.php";


$username = mysqli_real_escape_string($db, $_POST['username']);
$password = $_POST['password'];

$q = "SELECT * FROM users WHERE username='$username'";
$res = mysqli_query($db, $q) or die("Database Error:" . mysqli_error($db));
$user = mysqli_fetch_assoc($res);

if($user && password_verify($password, $user["password"])){
    // login the user and redirect to admin or main home page depending on role
    login_user($user);
    if($user["role"] == "admin"){
        header("Location: mainadmin.php");
        die();
    }
    else {
        header("Location: main.php");
        die();
    }
}

// if login fails
echo '<b>Incorrect username or password.</b> <a href="index.php">Back to login.</a>';