<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_cinemaol');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('APP_DEBUG', FALSE);

function REDIRECT($url) {

    header("Location: " . $url);
    exit();
}

function ABS_URL() {
    $pageURL = 'http';

    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"]; //. $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"]; // . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

function HREF($param) {
    echo ABS_URL() . $param;
}

function ToFullUrl($param) {
    return ABS_URL() . $param;
}

function IS_POST() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        return TRUE;
    }
    return FALSE;
}

function IS_AJAX() {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        return TRUE;
    }
    return FALSE;
}

if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__));
session_start();
require_once(ABSPATH . '/app-load.php');
?>