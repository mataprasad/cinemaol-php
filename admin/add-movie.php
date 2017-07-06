<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_common.php');
?>


<?php

//echo fnGetDbServerTime();
//include the view file and call the render method
require_once (ABSPATH . '/views/admin/add-movie.php');
$msg = NULL;
$status_list = getStatusList();
$language_list = getLanguageList();
$industry_list = getIndustryList();

if (IS_POST()) {

    $target_file = ABSPATH . "/content/uploads/" . GET_GUID();
    SAVE_UPLOADED_FILE("fuPoster", $target_file);
}

admin_add_movie_render($msg, $status_list, $language_list, $industry_list);
?>
