<?php

//include all common and helpers
require_once '../web-config.php';
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/booking/book-ticket.php');

if (IS_POST()) {
    booking_book_ticket_render();
}
?>
