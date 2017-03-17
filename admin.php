<!doctype html>
<html>
<head>
    <title>e-Books</title>  
    <link href="styles.css" rel="stylesheet"> 
</head>
<body>


</body>

</html>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ebooks";

// Create connection
$db = mysqli_connect("localhost","root","","ebooks") or die("Database connection failed");

$sql = "INSERT INTO users (name, username, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($db);
?>
