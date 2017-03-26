<?php

require_once('connect.php');
session_start();

/**
 * check if there's user logged into the current session
 * @return boolean
 */
function login_check () {
    return isset($_SESSION['login']);
}

/**
 * gets the login data of the current session
 * @return array
 */
function login_get () {
    if(!login_check()) return null;
    return $_SESSION['login'];
}

/**
 * clear login data from the session, essentially
 * logs out the user
 */
function login_clear () {
    if(login_check()){
        unset($_SESSION['login']);
    }
}

/**
 * logs in the specified user
 * @param $user array|null user map or null if user not logged in
 */
function login_user ($user) {
    $login = login_get();
    if(!$login) return null;

    $login["user_id"] = $user["id"];
    $login["username"] = $user["username"];
    // arbitrary data can be added to the session and linked
    // to the current user
    $login["data"] = [];
}

/**
 * fetch the currently logged in user
 * @return array|null returns the user map from the db or null if
 * the current user is not logged in
 */
function login_get_user () {
    $db = db_connection();
    $id = (int) login_get()["user_id"];
    $q = "SELECT * FROM users WHERE id=$id";
    $res = mysqli_query($db, $q) or die("Database error:".mysqli_error($db));
    return mysqli_fetch_assoc($res);
}

/**
 * check whether the currently logged-in user is an admin
 * @return boolean
 */
function login_check_admin () {
    if(!login_check()) return false;
    $user = login_get_user();
    return $user["role"] == "admin";
}

/**
 * adds arbirtrary data to the current login session
 * @param $key string name of the key used to identify the data
 * @param $data mixed data to store
 * @return boolean true if the data is added or false
 * if user is not logged in
 */
function login_set_data ($key, $data) {
   if($login = login_get()) {
       $login["data"][$key] = $data;
       return true;
   }
   return false;
}

/**
 * get arbitrary data from the login session by the key
 * used to add it
 * @param $key string
 * @return mixed the stored data or null if it was not found
 */
function login_get_data ($key) {
    if($login = login_get() {
        if(isset($login["data"][$key])) {
            return $login[$key];
        }
    }
    return null;
}

/**
 * deletes specified data from the login session
 * @param $key string
 */
function login_unset_data ($key) {
    if($login = login_get()) {
        if (isset($login["data"][$key])) {
            unset($login["data"][$key])
        }
    }
}