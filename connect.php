<?php

$db = mysqli_connect("localhost","root","","ebooks") or die("Database connection failed");

function db_connection () {
    global $db;
    return $db;
}

?>