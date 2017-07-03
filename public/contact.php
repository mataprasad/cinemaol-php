<?php

//include all common and helpers
require_once '../web-config.php';
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/public/contact.php');
$msg = "";
if (IS_POST()) {
    $msg = "Thanks for your valuable feedback.";
}
public_contact_render($msg);
?>
