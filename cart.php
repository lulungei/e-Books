<?php

session_start();

/*
The cart is stored as an associative array in $_SESSION under the key 'cart'

the cart array has the following structure
[
    "bookId1" => [
        "quantity": 10
    ],
    "bookId2" => [
        "quantity": 10
    ],
    ...
]
*/

/**
 * initialize cart array in session if
 * not already initialized
 */
function cart_init () {
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
}

/**
 * removes all cart data from session
 */
function cart_clear () {
    unset($_SESSION['cart']);
}
