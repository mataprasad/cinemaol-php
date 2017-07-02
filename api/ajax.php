<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_show_info.php');
?>

<?php

if (IS_AJAX() && IS_POST()) {
    $method = $_REQUEST["do"];
    switch ($method) {
        case "fill-date-list":
            fillDateListAjax();
            break;
        case "fill-time-list":
            fillTimeListAjax();
            break;
        default:
            break;
    }
}

function fillDateListAjax() {
    $json = json_decode(file_get_contents("php://input"));
    $data = fillDateList($json->pMovieTitle);
    $obj = (object) array('text' => '--SELECT--', 'value' => '0');
    array_unshift($data, $obj);
    //var_dump($data);
    echo json_encode($data);
    exit();
}

function fillTimeListAjax() {
    $json = json_decode(file_get_contents("php://input"));
    $data = fillTimeList($json->pMovieTitle,$json->pMovieDate);
    $obj = (object) array('text' => '--SELECT--', 'value' => '0');
    array_unshift($data, $obj);
    //var_dump($data);
    echo json_encode($data);
    exit();
}
?>
