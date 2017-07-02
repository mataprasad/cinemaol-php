<?php

//include all common and helpers
require_once '../web-config.php';
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/public/about.php');

public_about_render();
?>
