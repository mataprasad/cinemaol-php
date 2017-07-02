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
?>

