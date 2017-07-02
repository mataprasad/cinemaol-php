<?php

function fnInitEzSQL() {
    return new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
}

function fnGetDbServerTime() {
    $db = fnInitEzSQL();
    $time = $db->get_var("SELECT " . $db->sysdate());
    $db = NULL;
    return $time;
}

function fnDumpUserList() {
    $db = fnInitEzSQL();
    $query = "select * from userinfo";
    $db->vardump($db->get_results($query));
}

?>
