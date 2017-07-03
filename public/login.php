<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_user_info.php');

//echo fnGetDbServerTime();
//include the view file and call the render method

require_once (ABSPATH . '/views/public/login.php');
$msg = "";
$post_url = "/public/login.php";
$page_title = "";
if (IS_POST()) {
    $id = $_POST["txtLoginId"];
    $pwd = $_POST["txtLoginPass"];

    $_SESSION["IS_ADMIN"] = FALSE;
    $data = doUserLogin($id, $pwd, FALSE);

    if ($data != null && count($data) > 0) {
        $_SESSION["USER_INFO"] = $data[0];
        REDIRECT(ToFullUrl("/public/index.php"));
    } else {
        $msg = "Invalid login details.";
    }
}
public_login_render($msg, $post_url, $page_title);
?>