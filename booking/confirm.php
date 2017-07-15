<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_show_info.php');
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/booking/book-ticket.php');
$error = "";
if (IS_POST()) {

    $txtJsonData = $_POST["txtJsonData"];
    $booking_info = json_decode($txtJsonData);
    $booking_info->BookingDate = date("Y-m-d H:i:s");
    $total_seat_count = count($booking_info->sheats_layout);
    $total_cost = 0;
    for ($index = 0; $index < $total_seat_count; $index++) {
        $total_cost = $total_cost + ((int) $booking_info->sheats_layout[$index]->rate);
    }
    $row_info = addTicketInfo(APP_USER_ID, $total_seat_count, $booking_info->ddlShowDate, $booking_info->ddlShowTime, $booking_info->ShowId, $total_cost, $booking_info->BookingDate);
    if ($row_info != null && $row_info->NO > 0) {

        $added_rows = addTicketDetial($booking_info->ShowId, $row_info->ID, $booking_info->sheats_layout);
        $booking_info->TicketNo = $row_info->NO;
        $booking_info->TicketID = $row_info->ID;

        if (!($added_rows > 0)) {
            $error = "Unable to process ur request";
        }

        booking_book_ticket_render($booking_info);
    } else {
        $error = "Unable to process ur request";
    }

    if ($error != "") {
        render_error("Unable to process ur request.");
    }
}
?>
