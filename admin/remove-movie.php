<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_movie.php');
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/admin/remove-movie.php');
$msg = NULL;
//echo var_dump($msg);
if (IS_POST()) {
    $ids = json_decode($_POST["hdSelectedMovie"]);
    removeMovie($ids);
}
$movie_list = getMoviesToRemove();
admin_remove_movie_render($msg, $movie_list);
?>
