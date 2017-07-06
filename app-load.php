<?php

require_once(ABSPATH . '/lib/db_helper/shared/ez_sql_core.php');
require_once(ABSPATH . '/lib/db_helper/mysqli/ez_sql_mysqli.php');

require_once(ABSPATH . '/views/shared/layout.php');

$url_found = "TRUE";
if (isset($_REQUEST["no"])) {
    $url_found = "FALSE";
}
//echo $_REQUEST["url"];
//echo $url_found;
//exit();

$requested_page = $_SERVER["REQUEST_URI"];
//echo "<br>" . $requested_page;
//echo phpinfo();
//fnDumpUserList();
$call_for_system_dir = FALSE;
if (stripos($requested_page, "views") !== FALSE) {
    if (!isset($_SESSION["USER_INFO"])) {
        $call_for_system_dir = TRUE;
    }
}
if (stripos($requested_page, "admin") !== FALSE) {
    $call_for_system_dir = TRUE;
}
if (stripos($requested_page, "lib") !== FALSE) {
    $call_for_system_dir = TRUE;
}
if (stripos($requested_page, "user") !== FALSE) {
    if (!isset($_SESSION["USER_INFO"])) {
        $call_for_system_dir = TRUE;
    }
}
if (stripos($requested_page, "system.web") !== FALSE) {
    $call_for_system_dir = TRUE;
}

if ($call_for_system_dir) {
    echo "<h1 style='color:red;'>404 Not found.</h1>";
    exit();
}
?>