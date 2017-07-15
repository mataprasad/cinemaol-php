<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_cinemaol');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('APP_DEBUG', FALSE);

define('GRID_PAGE_SIZE', "7");

define('APP_NAME', "");
//define('APP_NAME', "/cinemaol");


if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__));
session_start();
require_once(ABSPATH . '/system.web/server_utility.php');
require_once(ABSPATH . '/system.web/file_upload.php');
require_once(ABSPATH . '/views/shared/error.php');
require_once(ABSPATH . '/app-load.php');

//echo phpinfo();
?>