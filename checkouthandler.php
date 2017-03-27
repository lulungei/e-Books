<?php

require_once "require_login.php";
require_once "cart.php";
require_once "AfricasTalkingGateway.php";


$apiUser = "username";
$apiKey = "apikey";
$apiEnv = "production";
$gateway = new AfricasTalkingGateway($apiUser, $apiKey, $apiEnv);

$user = login_get_user();
$items = cart_get_all_items();
$price = cart_get_total_price();

$message = "Hello ".$user['username'].", you order has been received:\n";
foreach($items as $item) {
    $message .= $item["quantity"] . "x ".$item["data"]["title"]."\n";
}
$message .= "TOTAL=KSH " . $price ."\n";
$message .= "Thank you.";

$res = $gateway->sendMessage($user["phone"], $message);

cart_clear();
header("Location: main.php");