<?php

/*
The cart is stored as an associative array in $_SESSION under the key 'cart'

the cart array has the following structure
[
    "bookId1" => [
        "quantity": 10
    ],
    "bookId2" => [
        "quantity": 2
    ],
    ...
]

an item is fetched from the cart by its key, which is supposed to
match the database primary key... the table that is looked up is
defined in the constant
CART_ITEMS_TABLE. 

when the cart_get_item($itemId) or cart_get_all_items() functions are called,
data is fetched from the database and added to the result to give it the following
structure

[
    "bookId1" => [
        "quantity": 10,
        "data" => [
            "price": 150,
            "title": "...",
            ...
        ]
    ],
    ...
]
*/

require_once 'connect.php';
require_once 'session.php';

define("CART_ITEMS_TABLE", "books");

/**
 * initialize cart array in session if
 * not already initialized
 */
function cart_init () {
    if(!login_get_data('cart')) {
        login_set_data('cart', []);
    }
}

/**
 * removes all cart data from session
 */
function cart_clear () {
    login_unset_data("cart");
}

/**
 * returns the cart array instance for
 * this session 
 * @return array the cart instance for the current session
 */
function cart_get() {
    cart_init();
    return login_get_data("cart");
}

/**
 * updates the cart with the specified date
 * @param $cart array
 */
function cart_update($cart) {
    login_set_data('cart', $cart);
}

/**
 * add the specified quantity of the item to the cart
 * if the item is already in the cart, the quantity will be
 * increased by the specified amount
 * @param $itemId
 * @param $quantity number
 */
function cart_add_item ($itemId, $quantity = 1) {
    $cart = cart_get();
    if (!isset($cart[$itemId])) {
        $cart[$itemId] = ["quantity" => $quantity];
    }
    else {
        $cart[$itemId]["quantity"] += $quantity;
    }
    cart_update($cart);
}

/**
 * remove the specified item from cart
 * @param $itemId
 * @param $quantity number the amount of instances to remove, if a negative number 
 * is provided, all the item instances are removed from the cart 
 */
function cart_remove_item ($itemId, $quantity = -1) {
    $cart = cart_get();
    $currentQuantity = $cart[$itemId]["quantity"];

    // if quantity is a negative value, remove instances of the item 
    // in the cart
    if ($quantity < 0 || $quantity >= $currentQuantity) {
        $newQuantity = 0;
    }
    // otherwise reduce the quantity by the specified amount
    else {
        $newQuantity = $currentQuantity - $quantity;
    }
    
    // if the new quantity is 0, remove the item from the cart 
    // completely
    if ($newQuantity == 0) {
        unset($cart[$itemId]);
    }
    // otherwise just update the quantity
    else {
        $cart[$itemId]["quantity"] = $newQuantity;
    }
    cart_update($cart);
    
}

/**
 * checks whether the specified item is in the cart
 * @param $itemId
 * @return boolean
 */
function cart_has_item ($itemId) {
    return isset(cart_get()[$itemId]);
}

/**
 * gets the data of the specified item from 
 * the database
 * @param $itemId
 * @return array
 */
function cart_get_item_data ($itemId) {
    $itemId = mysqli_real_escape_string(db_connection(), $itemId);
    $table = CART_ITEMS_TABLE;
    $q = "SELECT * FROM $table WHERE id=$itemId";
    $res = mysqli_query(db_connection(), $q) or die("Database error:". myqli_error(db_connection()));
    return mysqli_fetch_assoc($res);
}

/**
 * returns the data of the specified item in the cart
 * or null if the item is not in the cart
 * @return array|null
 */
function cart_get_item ($itemId) {
    if (!cart_has_item($itemId)) {
        return null;
    }
    else {
        $item =  cart_get()[$itemId];
        // combine data from cart array with data from database
        $item["data"] = cart_get_item_data($itemId);
        return $item;
    }
}

/**
 * get all the items from the cart, each
 * item is an associative array including the quantity
 * and data from the database
 * @return array
 */
function cart_get_all_items () {
    // get all item ids
    $itemIds = array_keys(cart_get());
    // use the cart_get_item function to transform the array of
    // item id's to an array of their corresponding data and quantities
    $items = array_map('cart_get_item', $itemIds);
    return $items;
}

/**
 * gets the price of the specified item 
 * taking the quantity into consideration
 * @param $item the cart item, should contain price in the data mao
 * @return number
 */
function cart_get_item_price ($item) {
    return $item["data"]["price"] * $item["quantity"];
}

/**
 * gets the total price of all the items in the cart
 * @return number
 */
function cart_get_total_price () {
    $itemIds = array_keys(cart_get());
    $items = array_map('cart_get_item', $itemIds);
    // use the cart_get_item_price function to transform an array
    // of items into an array of their corresponding prices
    $prices = array_map('cart_get_item_price', $items);
    $total = array_sum($prices);
    return $total;
}