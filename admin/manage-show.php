<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_common.php');
require_once (ABSPATH . '/system.web/db/db_movie.php');
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/admin/manage-show.php');
$msg = NULL;
$hall_list = getHallList();
$time_list = getTimeList();
$movie_list = getMovieList();

if (IS_POST()) {
    $hall = $_POST["ddlHall"];
    $date = $_POST["datepicker"];
    $time = $_POST["ddlTime"];
    $movie = $_POST["ddlMovie"];
}

admin_manage_show_render($msg, $hall_list, $time_list, $movie_list);
?>
