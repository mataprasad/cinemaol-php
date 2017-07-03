<?php

//include all common and helpers
require_once '../web-config.php';
?>


<?php

require_once (ABSPATH . '/system.web/db/db_user_info.php');
require_once (ABSPATH . '/views/public/reset-pass.php');

$msg = "";
$step = 1;
$user_id = "1";
$sq = "";

if (IS_POST()) {
    $step = $_POST["step"];

    switch ($step) {
        case 1:
            $user_id = $_POST["txtUserName"];
            $obj = getUser($user_id);
            if ($obj != null) {
                $step = 2;
                $user_id = $obj->User_LoginName;
                $sq = $obj->User_SQ;
            } else {
                $step = 1;
                $msg = $user_id . " - User does not exists.";
            }
            break;
        case 2:
            $user_id = $_POST["hdUser"];
            $sa = $_POST["txtSA"];
            $obj = getUser($user_id);
            if ($obj != null) {
                if ($obj->User_SA == $sa) {
                    $step = 3;
                    $user_id = $obj->User_LoginName;
                } else {
                    $step = 2;
                    $msg = "Security answer not matched.";
                    $user_id = $obj->User_LoginName;
                    $sq = $obj->User_SQ;
                }
            }
            break;
        case 3:
            $user_id = $_POST["hdUser"];
            $new_pwd = $_POST["txtNewPass"];

            $obj = (OBJECT) array("User_LoginName" => $user_id, "User_LoginPassword" => $new_pwd);
            if (changePassword($obj, TRUE) > 0) {
                $step = 3;
                $msg = "Password change successfully.";
            } else {
                $step = 3;
                $msg = "Unable to change password.";
            }
            break;
        default:
            break;
    }
}


public_reset_pass_render($msg, $step, $user_id, $sq);
?>