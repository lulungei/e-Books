<?php
if(isset($_POST['add'])) {
            
            $db = mysqli_connect("localhost","root","","ebooks") or die("Database connection failed");
            
            if(! $db ) {
               die('Could not connect: ' . mysqli_error($db));
            }

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
 $password = mysqli_real_escape_string($db, $_POST['password']);
  

// hash the password for security

$securePassword = password_hash($password, PASSWORD_DEFAULT);

//Store the data in the database

// prepare the insert statement

$query ="INSERT INTO users (username, email, password) VALUES".
        " ( '$username', '$email','$securePassword')";

// run the query in the database
 

mysqli_query($db, $query) or die(mysqli_error($db));
}
?>