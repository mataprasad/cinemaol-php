<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_user_info.php');
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/public/login.php');
$msg = "";
$post_url = "/public/login.php";
$page_title = "";
$_SESSION["IS_ADMIN"] = null;
$_SESSION["USER_INFO"] = null;

public_login_render($msg, $post_url, $page_title);
?>
