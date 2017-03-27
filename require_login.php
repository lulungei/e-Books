<?php

/*
redirect user to login page if not logged-in,

this script is used to restrict access to only logged-in users
*/

require_once 'session.php';

if (!login_check()) {
    // redirect to home page
    header('Location: index.php');
    die();
}

