<?php

function fillDateList($movie_title) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT distinct Show_Date as text, Show_Date as value "
            . "FROM ShowInfo WHERE Show_Date>=now() and Movie_Name='" . $movie_title . "';";
    $result = $db->get_results($query);

    return $result;
}

function fillTimeList($MovieTitle, $MovieDate) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT distinct Show_StartTime as text,Show_StartTime as value "
            . "FROM ShowInfo WHERE Show_Date='" . $MovieDate . "' and Movie_Name='" . $MovieTitle . "';";
    $result = $db->get_results($query);

    return $result;
}
?>

