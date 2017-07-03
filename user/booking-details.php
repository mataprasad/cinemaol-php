<?php

require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_user_info.php');
?>
<?php

require_once (ABSPATH . '/views/user/booking-details.php');
$ticket_id = $_REQUEST["id"];
$printOnLoad = TRUE;
$data = getBookingDetails($ticket_id);
if ($data != null) {
    user_booking_details_body($data->TktInfo, $data->SheatInfo, $printOnLoad);
} else {
    echo "<h1>Invalid ticket no.</h1>";
}
?>
