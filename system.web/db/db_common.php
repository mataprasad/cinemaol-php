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

?>