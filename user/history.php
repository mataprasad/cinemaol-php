<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_user_info.php');
?>


<?php

$user_info = $_SESSION["USER_INFO"];
$user_id = $user_info->User_Id;
$data = getBookingHistory($user_id, GRID_PAGE_SIZE, 1);
$total_records = 0;
if ($data != null && count($data) > 0) {
    $int_temp = count($data);
    $total_records = $data[0]->total_records;
}
require_once (ABSPATH . '/views/user/history.php');

user_history_render($data, $total_records);
?>