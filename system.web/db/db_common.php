<?php

function getAllStates() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "select UPPER(State_Name) as text,UPPER(State_Name) as value from StateInfo";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function getHallList() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT Hall_Id as value,Hall_No as text FROM HallInfo;";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function getTimeList() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT Time_StartTime as text,Time_StartTime as value FROM TimingInfo;";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function getStatusList() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT MovieStatus_Id as value ,MovieStatus_Value as text FROM MovieStatusInfo order by MovieStatus_Value;";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function getLanguageList() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT distinct Language_Name as text,Language_Name as value FROM MovieLanguageInfo order by Language_Name;";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function getIndustryList() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT distinct Industry_Name as text,Industry_Name as value FROM MovieIndustryInfo order by Industry_Name;";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

?>