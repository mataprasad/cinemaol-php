<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_common.php');
require_once (ABSPATH . '/system.web/db/db_user_info.php');


require_once (ABSPATH . '/views/public/register.php');
$msg = "";
if (IS_POST()) {
    if (empty($_SESSION['captcha_code']) || strcasecmp($_SESSION['captcha_code'], $_POST['txtVeriCode']) != 0) {
        $msg = "The Verification code does not match!"; // Captcha verification is incorrect.		
    } else {// Captcha verification is Correct. Final Code Execute here!	
        $posted_data = array(
//            "User_LoginName" => $_POST["txtUName"],
//            "User_LoginPassword" => $_POST["txtPass"],
//            "User_Email" => $_POST["txtEmail"],
//            "User_MobileNo" => $_POST["txtMobile"],
//            "User_FName" => $_POST["txtFName"],
//            "User_LName" => $_POST["txtLName"],
//            "User_Add" => $_POST["txtAdd1"] . " " . $_POST["txtAdd2"],
//            "User_City" => $_POST["txtCity"],
//            "User_State" => $_POST["ddlState"],
//            "User_SQ" => $_POST["txtSQ"],
//            "User_SA" => $_POST["txtSA"],
//            "User_Type" => "USER",
//            "User_IsActive" => "1");
            $_POST["txtUName"],
            $_POST["txtPass"],
            $_POST["txtEmail"],
            $_POST["txtMobile"],
            $_POST["txtFName"],
            $_POST["txtLName"],
            $_POST["txtAdd1"] . " " . $_POST["txtAdd2"],
            $_POST["txtCity"],
            $_POST["ddlState"],
            $_POST["txtSQ"],
            $_POST["txtSA"],
            "USER",
            "1");


        if (!isUserExists($_POST["txtUName"])) {
            if (registerUser($posted_data) == 1) {
                $msg = "Registration successfull.";
            } else {
                $msg = "Unbale to process your request please try after some time.";
            }
        } else {
            $msg = "Already an user exists with the choosen user name.";
        }
    }
}
$state_list = getAllStates();
public_register_render($msg, $state_list);
?>