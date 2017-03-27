<?php

require_once "require_login.php";
require_once "cart.php";

$id = $_GET["item"];

if($id == "all") {
    cart_clear();
}
else {
    cart_remove_item($id, -1); // remove all instances of item in quantity
}

header("Location: view_cart.php");