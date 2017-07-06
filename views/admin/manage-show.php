<?php

function admin_manage_show_head() { ?>
    <style type="text/css">
        .style7 {
            width: 100%;
        }

        .style27 {
            width: 157px;
        }

        .style28 {
        }

        .style29 {
            width: 219px;
        }

        .style30 {
            width: 128px;
        }
    </style>    
    <link href="<?php HREF("/content/resources/AjaxCalendar/AjaxCalendar.css"); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php HREF("/content/resources/AjaxCalendar/AjaxCalendar.js"); ?>" type="text/javascript"></script>
    <script>
        Sys.Application.add_init(appInit);
        function appInit() {
            $create(AjaxControlToolkit.CalendarBehavior, {"format": "dd/MM/yyyy"}, null, null, $get('datepicker'));
        }

        function fn_ValidateForm() {
            if ($("#ddlHall").val() == "0") {
                alert("please select hall.");
                return false;
            }
            if ($("#datepicker").val() == "") {
                alert("please select date.");
                return false;
            }
            if ($("#ddlTime").val() == "0") {
                alert("please select time.");
                return false;
            }
            if ($("#ddlMovie").val() == "0") {
                alert("please select movie.");
                return false;
            }

            return true;
        }

    </script>
<?php } ?>
<?php

function admin_manage_show_body($msg, $hall_list, $time_list, $movie_list) {
    ?>
    <form action="<?php HREF("/admin/manage-show.php"); ?>" method="post" onsubmit="return fn_ValidateForm();">
        <div style="padding: 0px; margin: 0px; border: 1px solid #3333CC">
            <div>
                <div style="border-style: none none solid none; border-width: 1px; border-color: #333333; height: 30px; background-color: #6600CC;">
                    <a style="font-size: 15pt; color: White; display: block; vertical-align: middle; line-height: 30px; text-align: justify; margin-left: 7px;">MANAGE SHOWS HERE --</a>
                </div>
            </div>
            <?php if ($msg != NULL) { ?>
                <p style="color: red;"><?php echo $msg; ?></p>
            <?php } ?>
            <table class="style7">
                <tr>
                    <td class="style30">&nbsp;</td>
                    <td class="style29">&nbsp;</td>
                    <td class="style27">&nbsp;</td>
                </tr>
                <tr>
                    <td class="style30" align="left">Select Hall :</td>
                    <td class="style28" align="left">
                        <select id="ddlHall" name="ddlHall" style = "height:25px;width:150px;">
                            <option value="0">--SELECT--</option>
                            <?php for ($index = 0; $index < count($hall_list); $index++) { ?>
                                <option value="<?php echo $hall_list[$index]->value; ?>"><?php echo $hall_list[$index]->text; ?></option>
                            <?php } ?>
                        </select>                            
                    </td>
                    <td class="style28" align="left">&nbsp;</td>
                </tr>
                <tr>
                    <td class="style30" align="left">Select Date :</td>
                    <td class="style28" align="left">

                        <input type="text" id="datepicker" readonly="readonly" name="datepicker" style="height: 25px; width: 150px;" />

                    </td>
                    <td class="style28" align="left">&nbsp;</td>
                </tr>
                <tr>
                    <td class="style30" align="left">Select Time :</td>
                    <td class="style28" align="left">
                        <select id="ddlTime" name="ddlTime" style = "height:25px;width:150px;">
                            <option value="0">--SELECT--</option>
                            <?php for ($index = 0; $index < count($time_list); $index++) { ?>
                                <option value="<?php echo $time_list[$index]->value; ?>"><?php echo $time_list[$index]->text; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td class="style28" align="left">&nbsp;</td>
                </tr>
                <tr>
                    <td class="style30" align="left">Select Movie :</td>
                    <td class="style28" align="left">
                        <select id="ddlMovie" name="ddlMovie" style = "height:25px;width:150px;">
                            <option value="0">--SELECT--</option>
                            <?php for ($index = 0; $index < count($movie_list); $index++) { ?>
                                <option value="<?php echo $movie_list[$index]->value; ?>"><?php echo $movie_list[$index]->text; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td class="style28" align="left">&nbsp;</td>
                </tr>
                <tr>
                    <td class="style30" align="left">&nbsp;</td>
                    <td class="style28" align="left">
                        <input type="submit" value="ADD" style="width: 58px;" id="btnAddShow" name="btnAddShow" />
                    </td>
                    <td class="style28" align="left">&nbsp;</td>
                </tr>
            </table>
        </div>
    </form>
<?php } ?>
<?php

function admin_manage_show_render($msg, $hall_list, $time_list, $movie_list) {
    app_render("admin_manage_show_body", "admin_manage_show_head", null, array($msg, $hall_list, $time_list, $movie_list), array(), array());
}
?>