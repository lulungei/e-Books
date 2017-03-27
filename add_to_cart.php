<?php

require_once "require_login.php";
require_once "cart.php";

$bookId = $_GET['book'];

cart_add_item($bookId);

$msg = "Book added to cart.";
header("Location: view_books.php?genre=".urlencode($_GET['from_genre'])."&msg=".urlencode($msg));