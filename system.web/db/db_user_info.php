<?php

function doUserLogin($id, $pwd, $isAdmin) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $user_type = "USER";
    if ($isAdmin) {
        $user_type = "ADMIN";
    }
    $query = "select User_Id,User_LoginName,User_LoginPassword,User_Email,User_MobileNo,User_FName,User_LName,User_Add,User_City,User_State,User_SQ,User_SA,User_Type,User_IsActive from UserInfo "
            . " where User_LoginName='" . $id . "'"
            . " and User_LoginPassword='" . $pwd . "' "
            . " and User_IsActive=1 and User_Type='" . $user_type . "';";
    $result = $db->get_results($query);

    if (APP_DEBUG) {
        $db->dumpvar($result);
    }

    return $result;
}

function isUserExists($login_name) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "select 1 as col from UserInfo where User_Type='USER' and User_LoginName='" . $login_name . "';";
    $result = $db->get_var($query);
    if (APP_DEBUG) {
        $db->dumpvar($result);
    }
    if ($result == 1) {
        return true;
    }
    return FALSE;
}

function registerUser($user_info) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "INSERT INTO USERINFO(User_LoginName,User_LoginPassword,User_Email"
            . ",User_MobileNo,User_FName,User_LName,User_Add,User_City"
            . ",User_State,User_SQ,User_SA,User_Type,User_IsActive)"
            //. "VALUES (" . implode(', ', $db->get_set($user_info)) . ");";
            . "VALUES ('" . implode("' , '", $user_info) . "');";
    $result = $db->query($query);

    if (APP_DEBUG) {
        var_dump($query);
        $db->vardump($result);
    }
    return $result;
}
?>

