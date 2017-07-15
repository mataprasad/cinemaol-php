<?php

//include all common and helpers
require_once '../web-config.php';
require_once (ABSPATH . '/system.web/db/db_show_info.php');
?>


<?php

require_once (ABSPATH . '/views/booking/select-sheats.php');
$output = "";
if (IS_POST()) {
    $show_meta = "";
    $show_id = getShowId($_POST["ddlShowMovie"], $_POST["ddlShowDate"], $_POST["ddlShowTime"]);
    $show_detail = getShowDetail($show_id);
    if ($show_id > -1) {
        $sheats = getShowSeats($show_id);
        for ($i = 1; $i < count($sheats); $i++) {
            $id = $sheats[$i]->text;
            $output = $output . "$('#chk" . $id . "').attr('disabled', 'disabled');$('#chk" . $id . "').attr('checked', 'checked');$('#chk" . $id . "').parent().css('background-color', 'red'); ";
        }
        $show_meta = array("ddlShowMovie" => $_POST["ddlShowMovie"],
            "ddlShowDate" => $_POST["ddlShowDate"],
            "ddlShowTime" => $_POST["ddlShowTime"],
            "ShowId" => $show_id,
            "HallNo" => $show_detail->Hall_No,
            "TicketNo" => "",
            "TicketID" => "",
            "BookingDate" => "",
            "sheats_layout" => array()
        );


        booking_select_sheats_render($output, $show_id, json_encode($show_meta));
    } else {
        render_error("Invalid show selection.");
    }
}
?>
