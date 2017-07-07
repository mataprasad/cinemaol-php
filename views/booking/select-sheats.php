<?php

function booking_select_sheats_head($output) { ?>
    <style type="text/css">
        .style1 {
            width: 595px;
        }

        .style2 {
            width: 56px;
            background-color: Green;
            color: White;
        }

        .style4 {
            width: 56px;
            background-color: Orange;
            color: White;
        }

        .style5 {
            width: 56px;
            background-color: Olive;
            color: White;
        }

        .style3 {
            width: 40px;
        }

        .style6 {
            width: 56px;
        }

        .selectedChk {
            background-color: blue;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function () {
            var temp = 0;
    <?php echo $output; ?>
            $("input[name='chkSheat']").click(function () {
                $("input[name='chkSheat']").parent().removeClass("selectedChk");
                $("input[name='chkSheat']:checked").parent().addClass("selectedChk");
                var selected = $("input[name='chkSheat']:checked").length;
                var preSelected = $("input[name='chkSheat']:disabled").length;
                temp = selected - preSelected;
                if (temp < 0) {
                    temp = temp * (-1);
                }
                if (temp > 6) {
                    alert("You can only select Six sheats.");
                    $(this).removeAttr("checked");
                    $("input[name='chkSheat']").parent().removeClass("selectedChk");
                    $("input[name='chkSheat']:checked").parent().addClass("selectedChk");
                }
            });
            $("[type='image']").click(function () {
                if (temp <= 0) {
                    alert("Please select atleast one sheat.");
                    return false;
                }
                var chkSheats = new Array();
                $("input[name='chkSheat']").each(function (i, obj) {
                    if ($(obj).attr("disabled") != "disabled" && $(obj).attr("checked") == "checked") {
                        var seat=new Object();
                        seat.no=$(obj).val();
                        seat.rate=$(obj).parent().parent().attr("rate");
                        chkSheats.push(seat);
                    }
                });
                $("#chkSheats").val(JSON.stringify(chkSheats));
                return true;
            });
            fn_Refresh();
        });
        function fn_Refresh() {
            $("#chkSheats").val("");
            $("input[name='chkSheat']").each(function (i, obj) {
                if ($(this).attr("disabled") != "disabled" && $(this).attr("checked") == "checked") {
                    $(this).removeAttr("checked");
                    $(this).parent().removeClass("selectedChk");
                }
            });
        }

    </script>
<?php } ?>
<?php

function booking_select_sheats_body($show_id, $show_meta) {
    ?>
    <form action="<?php HREF("/booking/select-sheats.php"); ?>" method="post">
        <div style="border: 1px solid #333333; padding: 0px; margin: 5px auto 0px auto;">
            <div style="border-style: none none solid none; border-width: 1px; border-color: #333333; height: 30px; background-color: #6600CC;">
                <a style="font-size: 15pt; color: White; display: block; vertical-align: middle; line-height: 30px; text-align: justify; margin-left: 7px;">SELECT SHEATS --</a>
            </div>
            <div>
                <div style="padding: 0px; margin: 0px auto 0px auto; width: 900px;">
                    <div style="padding: 0px; margin: 0px auto 0px auto; width: 380px;">
                        <img alt="" src="<?php HREF("/content/images/appImages/screen.jpg"); ?>" />
                    </div>
                    <div>
                        <hr />
                    </div>

                    <div style="height: 400px;">
                        <div style="float: left; width: 150px; height: 200px;"></div>
                        <div style="float: left; width: 600px; height: 400px;">

                            <table class="style1">
                                <tr rate="100">
                                    <td class="style2">
                                        <input id="chkA0" type="checkbox" name="chkSheat" value="A0" /><label for="chkA0">A0</label></td>
                                    <td class="style2">
                                        <input id="chkA1" type="checkbox" name="chkSheat" value="A1" /><label for="chkA1">A1</label></td>
                                    <td class="style2">
                                        <input id="chkA2" type="checkbox" name="chkSheat" value="A2" /><label for="chkA2">A2</label></td>
                                    <td class="style2">
                                        <input id="chkA3" type="checkbox" name="chkSheat" value="A3" /><label for="chkA3">A3</label></td>
                                    <td class="style2">
                                        <input id="chkA4" type="checkbox" name="chkSheat" value="A4" /><label for="chkA4">A4</label></td>
                                    <td class="style3">&nbsp;</td>
                                    <td class="style2">
                                        <input id="chkA5" type="checkbox" name="chkSheat" value="A5" /><label for="chkA5">A5</label></td>
                                    <td class="style2">
                                        <input id="chkA6" type="checkbox" name="chkSheat" value="A6" /><label for="chkA6">A6</label></td>
                                    <td class="style2">
                                        <input id="chkA7" type="checkbox" name="chkSheat" value="A7" /><label for="chkA7">A7</label></td>
                                    <td class="style2">
                                        <input id="chkA8" type="checkbox" name="chkSheat" value="A8" /><label for="chkA8">A8</label></td>
                                    <td class="style2">
                                        <input id="chkA9" type="checkbox" name="chkSheat" value="A9" /><label for="chkA9">A9</label></td>
                                    <td class="style2" rowspan="3"
                                        style="background-color: #FFFFFF; color: #800000;">SILVER<br />
                                        (100 Rs.)</td>
                                </tr>
                                <tr rate="100">
                                    <td class="style2">
                                        <input id="chkB0" type="checkbox" name="chkSheat" value="B0" /><label for="chkB0">B0</label></td>
                                    <td class="style2">
                                        <input id="chkB1" type="checkbox" name="chkSheat" value="B1" /><label for="chkB1">B1</label></td>
                                    <td class="style2">
                                        <input id="chkB2" type="checkbox" name="chkSheat" value="B2" /><label for="chkB2">B2</label></td>
                                    <td class="style2">
                                        <input id="chkB3" type="checkbox" name="chkSheat" value="B3" /><label for="chkB3">B3</label></td>
                                    <td class="style2">
                                        <input id="chkB4" type="checkbox" name="chkSheat" value="B4" /><label for="chkB4">B4</label></td>
                                    <td class="style3">&nbsp;</td>
                                    <td class="style2">
                                        <input id="chkB5" type="checkbox" name="chkSheat" value="B5" /><label for="chkB5">B5</label></td>
                                    <td class="style2">
                                        <input id="chkB6" type="checkbox" name="chkSheat" value="B6" /><label for="chkB6">B6</label></td>
                                    <td class="style2">
                                        <input id="chkB7" type="checkbox" name="chkSheat" value="B7" /><label for="chkB7">B7</label></td>
                                    <td class="style2">
                                        <input id="chkB8" type="checkbox" name="chkSheat" value="B8" /><label for="chkB8">B8</label></td>
                                    <td class="style2">
                                        <input id="chkB9" type="checkbox" name="chkSheat" value="B9" /><label for="chkB9">B9</label></td>
                                </tr>
                                <tr rate="100">
                                    <td class="style2">
                                        <input id="chkC0" type="checkbox" name="chkSheat" value="C0" /><label for="chkC0">C0</label></td>
                                    <td class="style2">
                                        <input id="chkC1" type="checkbox" name="chkSheat" value="C1" /><label for="chkC1">C1</label></td>
                                    <td class="style2">
                                        <input id="chkC2" type="checkbox" name="chkSheat" value="C2" /><label for="chkC2">C2</label></td>
                                    <td class="style2">
                                        <input id="chkC3" type="checkbox" name="chkSheat" value="C3" /><label for="chkC3">C3</label></td>
                                    <td class="style2">
                                        <input id="chkC4" type="checkbox" name="chkSheat" value="C4" /><label for="chkC4">C4</label></td>
                                    <td class="style3">&nbsp;</td>
                                    <td class="style2">
                                        <input id="chkC5" type="checkbox" name="chkSheat" value="C5" /><label for="chkC5">C5</label></td>
                                    <td class="style2">
                                        <input id="chkC6" type="checkbox" name="chkSheat" value="C6" /><label for="chkC6">C6</label></td>
                                    <td class="style2">
                                        <input id="chkC7" type="checkbox" name="chkSheat" value="C7" /><label for="chkC7">C7</label></td>
                                    <td class="style2">
                                        <input id="chkC8" type="checkbox" name="chkSheat" value="C8" /><label for="chkC8">C8</label></td>
                                    <td class="style2">
                                        <input id="chkC9" type="checkbox" name="chkSheat" value="C9" /><label for="chkC9">C9</label></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>

                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td class="style6">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td class="style2" rowspan="4"
                                        style="background-color: #FFFFFF; color: #990000;">GOLD<br />
                                        (175 Rs.)</td>

                                </tr>
                                <tr rate="175">
                                    <td class="style4">
                                        <input id="chkD0" type="checkbox" name="chkSheat" value="D0" /><label for="chkD0">D0</label></td>
                                    <td class="style4">
                                        <input id="chkD1" type="checkbox" name="chkSheat" value="D1" /><label for="chkD1">D1</label></td>
                                    <td class="style4">
                                        <input id="chkD2" type="checkbox" name="chkSheat" value="D2" /><label for="chkD2">D2</label></td>
                                    <td class="style4">
                                        <input id="chkD3" type="checkbox" name="chkSheat" value="D3" /><label for="chkD3">D3</label></td>
                                    <td class="style4">
                                        <input id="chkD4" type="checkbox" name="chkSheat" value="D4" /><label for="chkD4">D4</label></td>

                                    <td class="style3">&nbsp;</td>
                                    <td class="style4">
                                        <input id="chkD5" type="checkbox" name="chkSheat" value="D5" /><label for="chkD5">D5</label></td>
                                    <td class="style4">
                                        <input id="chkD6" type="checkbox" name="chkSheat" value="D6" /><label for="chkD6">D6</label></td>
                                    <td class="style4">
                                        <input id="chkD7" type="checkbox" name="chkSheat" value="D7" /><label for="chkD7">D7</label></td>
                                    <td class="style4">
                                        <input id="chkD8" type="checkbox" name="chkSheat" value="D8" /><label for="chkD8">D8</label></td>
                                    <td class="style4">
                                        <input id="chkD9" type="checkbox" name="chkSheat" value="D9" /><label for="chkD9">D9</label></td>

                                </tr>
                                <tr rate="175">
                                    <td class="style4">
                                        <input id="chkE0" type="checkbox" name="chkSheat" value="E0" /><label for="chkE0">E0</label></td>
                                    <td class="style4">
                                        <input id="chkE1" type="checkbox" name="chkSheat" value="E1" /><label for="chkE1">E1</label></td>
                                    <td class="style4">
                                        <input id="chkE2" type="checkbox" name="chkSheat" value="E2" /><label for="chkE2">E2</label></td>
                                    <td class="style4">
                                        <input id="chkE3" type="checkbox" name="chkSheat" value="E3" /><label for="chkE3">E3</label></td>
                                    <td class="style4">
                                        <input id="chkE4" type="checkbox" name="chkSheat" value="E4" /><label for="chkE4">E4</label></td>

                                    <td class="style3">&nbsp;</td>
                                    <td class="style4">
                                        <input id="chkE5" type="checkbox" name="chkSheat" value="E5" /><label for="chkE5">E5</label></td>
                                    <td class="style4">
                                        <input id="chkE6" type="checkbox" name="chkSheat" value="E6" /><label for="chkE6">E6</label></td>
                                    <td class="style4">
                                        <input id="chkE7" type="checkbox" name="chkSheat" value="E7" /><label for="chkE7">E7</label></td>
                                    <td class="style4">
                                        <input id="chkE8" type="checkbox" name="chkSheat" value="E8" /><label for="chkE8">E8</label></td>
                                    <td class="style4">
                                        <input id="chkE9" type="checkbox" name="chkSheat" value="E9" /><label for="chkE9">E9</label></td>

                                </tr>
                                <tr rate="175">
                                    <td class="style4">
                                        <input id="chkF0" type="checkbox" name="chkSheat" value="F0" /><label for="chkF0">F0</label></td>
                                    <td class="style4">
                                        <input id="chkF1" type="checkbox" name="chkSheat" value="F1" /><label for="chkF1">F1</label></td>
                                    <td class="style4">
                                        <input id="chkF2" type="checkbox" name="chkSheat" value="F2" /><label for="chkF2">F2</label></td>
                                    <td class="style4">
                                        <input id="chkF3" type="checkbox" name="chkSheat" value="F3" /><label for="chkF3">F3</label></td>
                                    <td class="style4">
                                        <input id="chkF4" type="checkbox" name="chkSheat" value="F4" /><label for="chkF4">F4</label></td>

                                    <td class="style3">&nbsp;</td>
                                    <td class="style4">
                                        <input id="chkF5" type="checkbox" name="chkSheat" value="F5" /><label for="chkF5">F5</label></td>
                                    <td class="style4">
                                        <input id="chkF6" type="checkbox" name="chkSheat" value="F6" /><label for="chkF6">F6</label></td>
                                    <td class="style4">
                                        <input id="chkF7" type="checkbox" name="chkSheat" value="F7" /><label for="chkF7">F7</label></td>
                                    <td class="style4">
                                        <input id="chkF8" type="checkbox" name="chkSheat" value="F8" /><label for="chkF8">F8</label></td>
                                    <td class="style4">
                                        <input id="chkF9" type="checkbox" name="chkSheat" value="F9" /><label for="chkF9">F9</label></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>

                                    <td class="style6">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td class="style2" rowspan="4"
                                        style="background-color: #FFFFFF; color: #800000;">PLETINUM<br />
                                        (225 Rs.)</td>
                                </tr>

                                <tr rate="225">
                                    <td class="style5">
                                        <input id="chkG0" type="checkbox" name="chkSheat" value="G0" /><label for="chkG0">G0</label></td>
                                    <td class="style5">
                                        <input id="chkG1" type="checkbox" name="chkSheat" value="G1" /><label for="chkG1">G1</label></td>
                                    <td class="style5">
                                        <input id="chkG2" type="checkbox" name="chkSheat" value="G2" /><label for="chkG2">G2</label></td>
                                    <td class="style5">
                                        <input id="chkG3" type="checkbox" name="chkSheat" value="G3" /><label for="chkG3">G3</label></td>
                                    <td class="style5">
                                        <input id="chkG4" type="checkbox" name="chkSheat" value="G4" /><label for="chkG4">G4</label></td>

                                    <td class="style3">&nbsp;</td>
                                    <td class="style5">
                                        <input id="chkG5" type="checkbox" name="chkSheat" value="G5" /><label for="chkG5">G5</label></td>
                                    <td class="style5">
                                        <input id="chkG6" type="checkbox" name="chkSheat" value="G6" /><label for="chkG6">G6</label></td>
                                    <td class="style5">
                                        <input id="chkG7" type="checkbox" name="chkSheat" value="G7" /><label for="chkG7">G7</label></td>
                                    <td class="style5">
                                        <input id="chkG8" type="checkbox" name="chkSheat" value="G8" /><label for="chkG8">G8</label></td>
                                    <td class="style5">
                                        <input id="chkG9" type="checkbox" name="chkSheat" value="G9" /><label for="chkG9">G9</label></td>

                                </tr>
                                <tr rate="225">
                                    <td class="style5">
                                        <input id="chkH0" type="checkbox" name="chkSheat" value="H0" /><label for="chkH0">H0</label></td>
                                    <td class="style5">
                                        <input id="chkH1" type="checkbox" name="chkSheat" value="H1" /><label for="chkH1">H1</label></td>
                                    <td class="style5">
                                        <input id="chkH2" type="checkbox" name="chkSheat" value="H2" /><label for="chkH2">H2</label></td>
                                    <td class="style5">
                                        <input id="chkH3" type="checkbox" name="chkSheat" value="H3" /><label for="chkH3">H3</label></td>
                                    <td class="style5">
                                        <input id="chkH4" type="checkbox" name="chkSheat" value="H4" /><label for="chkH4">H4</label></td>

                                    <td class="style3">&nbsp;</td>
                                    <td class="style5">
                                        <input id="chkH5" type="checkbox" name="chkSheat" value="H5" /><label for="chkH5">H5</label></td>
                                    <td class="style5">
                                        <input id="chkH6" type="checkbox" name="chkSheat" value="H6" /><label for="chkH6">H6</label></td>
                                    <td class="style5">
                                        <input id="chkH7" type="checkbox" name="chkSheat" value="H7" /><label for="chkH7">H7</label></td>
                                    <td class="style5">
                                        <input id="chkH8" type="checkbox" name="chkSheat" value="H8" /><label for="chkH8">H8</label></td>
                                    <td class="style5">
                                        <input id="chkH9" type="checkbox" name="chkSheat" value="H9" /><label for="chkH9">H9</label></td>

                                </tr>
                                <tr rate="225">
                                    <td class="style5">
                                        <input id="chkI0" type="checkbox" name="chkSheat" value="I0" /><label for="chkI0">I0</label></td>
                                    <td class="style5">
                                        <input id="chkI1" type="checkbox" name="chkSheat" value="I1" /><label for="chkI1">I1</label></td>
                                    <td class="style5">
                                        <input id="chkI2" type="checkbox" name="chkSheat" value="I2" /><label for="chkI2">I2</label></td>
                                    <td class="style5">
                                        <input id="chkI3" type="checkbox" name="chkSheat" value="I3" /><label for="chkI3">I3</label></td>
                                    <td class="style5">
                                        <input id="chkI4" type="checkbox" name="chkSheat" value="I4" /><label for="chkI4">I4</label></td>

                                    <td class="style3">&nbsp;</td>
                                    <td class="style5">
                                        <input id="chkI5" type="checkbox" name="chkSheat" value="I5" /><label for="chkI5">I5</label></td>
                                    <td class="style5">
                                        <input id="chkI6" type="checkbox" name="chkSheat" value="I6" /><label for="chkI6">I6</label></td>
                                    <td class="style5">
                                        <input id="chkI7" type="checkbox" name="chkSheat" value="I7" /><label for="chkI7">I7</label></td>
                                    <td class="style5">
                                        <input id="chkI8" type="checkbox" name="chkSheat" value="I8" /><label for="chkI8">I8</label></td>
                                    <td class="style5">
                                        <input id="chkI9" type="checkbox" name="chkSheat" value="I9" /><label for="chkI9">I9</label></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td class="style6">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td class="style6">&nbsp;</td>
                                    <td colspan="2" rowspan="2">
                                        <input type="image" style="height: 30px; width: 100px;" src="<?php HREF("/content/images/appImages/btnNext.png"); ?>" />
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td class="style6">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: left; width: 150px;"></div>
                    </div>

                </div>
            </div>
        </div>
        <textarea id="txtJsonData" name="txtJsonData" style="display: none;">
            <?php echo $show_meta; ?>
        </textarea>
        <input type="hidden" name="chkSheats" id="chkSheats" value="" />
        <input type="hidden" name="showId" id="showId" value="<?php echo $show_id; ?>" />
    </form>
<?php } ?>
<?php

function booking_select_sheats_render($output, $show_id, $show_meta) {
    app_render("booking_select_sheats_body", "booking_select_sheats_head", null, array($show_id, $show_meta), array($output), array());
}
?>
