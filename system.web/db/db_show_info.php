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

function getShowId($movie, $date, $time) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "select Show_Id from ShowInfo "
            . " where Show_Date='$date'"
            . " and Movie_Name='$movie' and Show_StartTime='$time';";
    $result = $db->get_var($query);

    return $result;
}

function getShowDetail($show_id) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "select s.Show_Id,Show_Date, "
            . " s.Show_StartTime,s.Movie_Name,(select h.Hall_No from HallInfo h "
            . " where Hall_Id=s.Hall_No) As Hall_No  from ShowInfo s where s.Show_Id='$show_id';";
    $result = $db->get_results($query);

    if ($result != NULL) {
        $result = $result[0];
    }

    return $result;
}

function getShowSeats($show_id) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "select Sheat_No as text from TicketDetail where Show_Id='$show_id';";
    $result = $db->get_results($query);

    return $result;
}

function addTicketInfo($userId, $sheatsCount, $showDate, $showTime, $showId, $totalCost, $bookingDate) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "CALL usp_book_ticket('" . $userId . "','" . $sheatsCount . "','"
            . $showDate . "','" . $showTime . "','" . $showId . "','" . $totalCost . "','" . $bookingDate . "','')";
    $result = $db->get_results($query);

    if (APP_DEBUG) {
        $db->dumpvar($result);
    }
    if ($result != NULL) {
        return $result[0];
    }
    return NULL;
}

function addTicketDetial($showId, $ticketId, $selectSheats) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $rows_effected = 0;
    for ($index = 0; $index < count($selectSheats); $index++) {
        $query = "INSERT INTO TicketDetail (Ticket_id,Sheat_No,Sheat_Cost,Show_Id) VALUES ('"
                . $ticketId . "','" . $selectSheats[$index]->no . "','" . $selectSheats[$index]->rate . "','" . $showId . "');";
        $rows_effected += $db->query($query);
    }
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $rows_effected;
}
?>

