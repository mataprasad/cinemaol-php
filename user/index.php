<?php

//include all common and helpers
require_once '../web-config.php';
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/user/index.php');
$user_info = $_SESSION["USER_INFO"];
user_index_render($user_info);
?>
