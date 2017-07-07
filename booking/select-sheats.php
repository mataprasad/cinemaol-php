<?php

require_once '../web-config.php';
?>


<?php

if (IS_POST()) {
    require_once (ABSPATH . '/views/booking/confirm.php');

    $show_meta_json = $_POST["txtJsonData"];
    $show_meta = json_decode($show_meta_json);
    $chkSheats = json_decode($_POST["chkSheats"]);

    $sheats_layout = "";
    $total_cost = 0;

    for ($index = 0; $index < count($chkSheats); $index++) {
        $sheats_layout = $sheats_layout . '  <tr>'
                . '<td align="center" class="style2" style="background-color: #FF9900">' . $chkSheats[$index]->no . '</td>'
                . '<td align = "center" style = "background-color: #FF9900">' . $chkSheats[$index]->rate . '</td>'
                . '<td align = "center" style = "background-color: #FF9900">&nbsp;</td>'
                . '</tr>   ';
        $total_cost = $total_cost + ((int) $chkSheats[$index]->rate);
    }

    if ($sheats_layout != "") {
        $sheats_layout = $sheats_layout . '<tr>'
                . '<td align="center" class="style2" style="background-color: #00FF00"> Total Cost =  </td>'
                . '<td align="center" style="background-color: #00FF00">' . $total_cost . ' Rs.</td>'
                . '<td align="center" style="background-color: #00FF00">&nbsp;</td>'
                . '</tr>';
    }

    $ticket_data = (OBJECT) array(
                "Movie_Name" => $show_meta->ddlShowMovie,
                "Show_Date" => $show_meta->ddlShowDate,
                "Show_Time" => $show_meta->ddlShowTime,
                "ShowId" => $show_meta->ShowId,
                "Hall_No" => $show_meta->HallNo,
                "sheats_count" => count($chkSheats),
                "sheats_layout" => $sheats_layout);

    booking_confirm_render($ticket_data, $show_meta_json);
}
?>
