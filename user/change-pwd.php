<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_user_info.php');
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/user/change-pwd.php');
$user_info = $_SESSION["USER_INFO"];
$msg = NULL;
if (IS_POST()) {

    $current_pass = $_POST["txtCurrentPass"];
    $new_pass = $_POST["txtNewRePass"];

    if ($current_pass == $user_info->User_LoginPassword) {
        $user_info->User_LoginPassword = $new_pass;
        if (changePassword($user_info, FALSE) > 0) {
            $msg = "Password Changed Successfully.";
        } else {
            $msg = "Oops some problems occured !";
        }
    } else {
        $msg = "Current password is not correct !";
    }
}
user_change_pwd_render($msg);
?>
