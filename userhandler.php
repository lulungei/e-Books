<?php
if(isset($_POST['add'])) {
            
            $db = mysqli_connect("localhost","root","","ebooks") or die("Database connection failed");
            
            if(! $db ) {
               die('Could not connect: ' . mysqli_error($db));
            }

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$password = $_POST['password'];
$repeatPass = $_POST['repeat-password'];

if($password != $repeatPass) {
   die("<b>Passwords don't match</b> <a href='index.php'>Back to login.</a>");
}


// hash the password for security

$securePassword = password_hash($password, PASSWORD_DEFAULT);

$role = 'ordinary';

//Store the data in the database

// prepare the insert statement

$query ="INSERT INTO users (role, username, email, phone, password) VALUES".
        "('$role', $username', '$email', '$phone', '$securePassword')";

// run the query in the database
 

mysqli_query($db, $query) or die(mysqli_error($db));
}
?>