<?php

/*
redirects user to home page if user is not logged-in as admin,

this script is used to restrict access to admin users
*/

require_once "session.php";

if (!login_check_admin()) {
    header('Location: index.php');
    die();
}