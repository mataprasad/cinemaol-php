<?php

//include all common and helpers
require_once '../web-config.php';
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/booking/book-ticket.php');

if (IS_POST()) {
    
    $txtJsonData=$_POST["txtJsonData"];
    $booking_info= json_decode($txtJsonData);
    booking_book_ticket_render($booking_info);
}
?>
