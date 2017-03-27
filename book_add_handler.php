<?php

require_once "connect.php";
require_once "require_admin.php";

$title = mysqli_real_escape_string($db, $_POST['title']);
$genre = mysqli_real_escape_string($db, $_POST['genre']);
$author = mysqli_real_escape_string($db, $_POST['author']);
$year = (int) $_POST['year'];
$price = (int) $_POST['price'];

$image = $_FILES['image'];
$imagePath = "uploads/" . $image["name"];

// move image
move_uploaded_file($image['tmp_name'], $imagePath);

$q = "INSERT INTO books (title, genre, author, year, price, image_path) "
    ."VALUES ('$title', '$genre', '$author', $year, $price, '$imagePath')";

mysqli_query($db, $q) or die("Database Error: ". mysqli_error($db));

header("Location: manage_books.php");