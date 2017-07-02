<?php

function fillMovieList() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT distinct Movie_Name as text, Movie_Name as value FROM ShowInfo WHERE "
            . "     Show_Date>=now() and Movie_Name is not null;";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function getMoviesImageURL() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT Movie_ImageURL as text FROM MovieInfo where Movie_Status=1 or Movie_Status=2;";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function getRunningMovies() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT Movie_Id,Movie_ImageURL ,Movie_Status ,Movie_Title ,Movie_ReleaseDate,Movie_Director ,Movie_Casts ,Movie_Language ,Movie_Industry FROM MovieInfo where Movie_Status=1";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function getUpCommingMovies() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT Movie_Id,Movie_ImageURL ,Movie_Status ,Movie_Title ,Movie_ReleaseDate,Movie_Director ,Movie_Casts ,Movie_Language ,Movie_Industry FROM MovieInfo where Movie_Status=2";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function getMoviesToRemove() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "    SELECT MovieInfo.Movie_Id, MovieInfo.Movie_Title, MovieStatusInfo.MovieStatus_Value, "
            . "                        Movie_ReleaseDate "
            . "                        FROM MovieInfo "
            . "                        JOIN MovieStatusInfo on MovieInfo.Movie_Status=MovieStatusInfo.MovieStatus_Id "
            . "                        where Movie_Status<>3;";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function removeMovie($ids) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "UPDATE MovieInfo SET Movie_Status = 3 "
            . "WHERE Movie_Id in (" + join(",", $ids) + ")";
    $result = $db->query($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function getMovieList() {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "SELECT Movie_Title as text ,Movie_Title as value FROM MovieInfo WHERE Movie_Status<>3";
    $result = $db->get_results($query);
    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

function addNewMovie($movie_info) {
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $query = "INSERT INTO MovieInfo (Movie_ImageURL,Movie_Status,Movie_Title,"
            . "Movie_ReleaseDate,Movie_Director,Movie_Casts,Movie_Language,Movie_Industry) "
            . "VALUES (" . $db->get_set($movie_info) . ");";
    $result = $db->query($query);

    if (APP_DEBUG) {
        $db->vardump($result);
    }
    return $result;
}

?>
