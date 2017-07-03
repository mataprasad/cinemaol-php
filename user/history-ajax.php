<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_user_info.php');
?>


<?php

$user_info = $_SESSION["USER_INFO"];
$user_id = $user_info->User_Id;
$page_no = $_REQUEST["page"];
$data = getBookingHistory($user_id, GRID_PAGE_SIZE, $page_no);


require_once (ABSPATH . '/views/user/_movie-history.php');
partial_render_movie_history($data);
?>