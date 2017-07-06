<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_common.php');
require_once (ABSPATH . '/system.web/db/db_user_info.php');
?>


<?php

require_once (ABSPATH . '/views/user/edit.php');

$user_info = $_SESSION["USER_INFO"];
$msg = NULL;
$state_list = getAllStates();


if (IS_POST()) {
    $posted_data = array(
        "User_Email" => $_POST["user_Email"],
        "User_MobileNo" => $_POST["user_MobileNo"],
        "User_FName" => $_POST["user_FName"],
        "User_LName" => $_POST["user_LName"],
        "User_Add" => $_POST["user_Add"],
        "User_City" => $_POST["user_City"],
        "User_State" => $_POST["ddlState"],
        "User_SQ" => $_POST["user_SQ"],
        "User_SA" => $_POST["user_SA"]);

    if (updateUser($posted_data, $user_info->User_Id) > 0) {
        $data = doUserLogin($user_info->User_LoginName, $user_info->User_LoginPassword, false);
        if ($data != null && count($data) > 0) {
            $_SESSION["USER_INFO"] = $data[0];
            $user_info = $_SESSION["USER_INFO"];
        }
        $msg = "Updated successfully.";
    } else {
        $msg = "Not Updated.";
    }
}

user_edit_render($user_info, $msg, $state_list);
?>
