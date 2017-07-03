<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_movie.php');
?>

<?php

//handle user request, i.e validate user login and posted data or posted file
//get all active movie list and there image list

$movie_list = getRunningMovies();
?>

<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/public/movie.php');

public_movie_render($movie_list);
?>