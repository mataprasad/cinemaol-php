<?php

require_once(ABSPATH . '/lib/db_helper/shared/ez_sql_core.php');
require_once(ABSPATH . '/lib/db_helper/mysqli/ez_sql_mysqli.php');

require_once(ABSPATH . '/views/shared/layout.php');

$requested_page = $_SERVER["REQUEST_URI"];
//echo "<br>" . $requested_page;
//echo phpinfo();
//fnDumpUserList();
?>