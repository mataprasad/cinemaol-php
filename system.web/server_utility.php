<?php

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
?>

