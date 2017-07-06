<?php

//include all common and helpers
require_once '../web-config.php';
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/booking/select-sheats.php');

booking_select_sheats_render();
?>
