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
$post_url = "/public/admin-login.php";
$page_title = "ADMIN ";
if (IS_POST()) {
    $msg = "THIS IS POST REQUEST";
    $id = $_POST["txtLoginId"];
    $pwd = $_POST["txtLoginPass"];

    $_SESSION["IS_ADMIN"] = TRUE;
    $data = doUserLogin($id, $pwd, TRUE);

    if ($data != null && count($data) > 0) {
        $_SESSION["USER_INFO"] = $data[0];
        //REDIRECT(HREF("/public/index.php"));
    }
}
public_login_render($msg, $post_url, $page_title);
?>
