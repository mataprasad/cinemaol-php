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

function getUser($user_name) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "select User_Id,User_LoginName,User_LoginPassword,User_Email"
            . ",User_MobileNo,User_FName,User_LName,User_Add,User_City"
            . ",User_State,User_SQ,User_SA,User_Type,User_IsActive "
            . " from UserInfo where  "
            . " User_IsActive=1 and User_Type='USER' and User_LoginName='" . $user_name . "';";
    $result = $db->get_results($query);

    if (APP_DEBUG) {
        $db->dumpvar($result);
    }

    if ($result != NULL) {
        return $result[0];
    }

    return $result;
}

function changePassword($user_info, $with_login_name = FALSE) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);

    if ($with_login_name) {
        $query = "update UserInfo set User_LoginPassword='" . $user_info->User_LoginPassword . "' "
                . "where User_LoginName='" . $user_info->User_LoginName . "' AND user_type='USER';";
    } else {
        $query = "update UserInfo set User_LoginPassword='" . $user_info->User_LoginPassword . "' "
                . "where User_Id='" . $user_info->User_Id . "';";
    }
    $result = $db->query($query);

    if (APP_DEBUG) {
        var_dump($query);
        $db->vardump($result);
    }
    return $result;
}

function getBookingHistory($user_id, $page_size, $page_no) {
    $min = (($page_no - 1) * $page_size) + 1;
    $max = $min + ($page_size - 1);

    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
//    $query = " SELECT *,@x as total_records "
//            . " FROM (SELECT  @x:=@x+1 as SNo,ShowInfo.Show_Id"
//            . ",ShowInfo.Movie_Name, TicketInfo.Ticket_Id,TicketInfo.Ticket_No"
//            . ",TicketInfo.User_Id,TicketInfo.Show_Date, TicketInfo.Show_Time"
//            . ",TicketInfo.Booking_Date,'' as URL "
//            . " FROM TicketInfo JOIN ShowInfo "
//            . " ON TicketInfo.Show_Id=ShowInfo.Show_Id "
//            . " where TicketInfo.User_Id=" . $user_id . ") AS X WHERE SNO between " . $min . " and " . $max . ";";

    $query = "CALL usp_get_booking_history(" . $user_id . "," . $min . "," . $max . ")";

    $result = $db->get_results($query);

    if (APP_DEBUG) {
        $db->dumpvar($result);
    }
    return $result;
}

function getBookingDetails($id) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query1 = "SELECT ShowInfo.Movie_Name,TicketInfo.Ticket_Id"
            . ",TicketInfo.Ticket_No,TicketInfo.User_Id, "
            . "TicketInfo.Show_Date as 'Show_Date' ,TicketInfo.Show_Time, "
            . "TicketInfo.Booking_Date as 'Booking_Date' "
            . "FROM TicketInfo INNER JOIN ShowInfo ON "
            . "TicketInfo.Show_Id = ShowInfo.Show_Id "
            . "where TicketInfo.Ticket_Id=" . $id . ";";

    $result1 = $db->get_results($query1);

    if ($result1 == null) {
        return null;
    }
    $query2 = "SELECT Sheat_No as text,Sheat_Cost as value,Ticket_id "
            . "FROM TicketDetail where Ticket_id=" . $id . ";";
    $result2 = $db->get_results($query2);

    return (OBJECT) array("TktInfo" => $result1[0], "SheatInfo" => $result2);
}

function updateUser($user_info, $user_id) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);

    $query = "Update UserInfo set "
            . $db->get_set($user_info)
            . " where User_Id='" . $user_id . "';";
    $result = $db->query($query);

    if (APP_DEBUG) {
        var_dump($query);
        $db->vardump($result);
    }
    return $result;
}
?>

