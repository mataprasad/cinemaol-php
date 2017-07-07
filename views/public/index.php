<?php

function public_index_body($p_movie_names, $p_movie_images) {
    ?>
    <div style="height: 350px;">
        <div style="width: 620px; float: left; height: 300px;">
            <div class="panel">
                <div class="container">
                    <div class="wt-rotator">
                        <div class="screen">
                            <noscript>
                            <img src="<?php HREF("/content/images/sf.jpg"); ?>" alt="" />
                            </noscript>
                        </div>
                        <div class="c-panel">
                            <div class="thumbnails">
                                <ul>
                                    <?php
                                    for ($index = 0; $index < count($p_movie_images); $index++) {
                                        ?>
                                        <li><a href="<?php HREF("/content/images/movieImages/" . $p_movie_images[$index]->text); ?>" title=""></a></li>                                    
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="buttons">
                                <div class="prev-btn"></div>
                                <div class="play-btn"></div>
                                <div class="next-btn"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div align="center"
             style="width: 350px; float: right; height: 300px; border: 1px solid #000000;">
            <div
                style="border-style: none none solid none; border-width: 1px; border-color: #000000; width: 350px; height: 30px; background-color: #6600CC;">
                <a
                    style="font-size: 15pt; color: White; display: block; vertical-align: middle; line-height: 30px; text-align: justify; margin-left: 7px;">BOOK
                    YOUR TICKETS HERE</a>
            </div>
            <h1></h1>
            <form action="<?php HREF("/booking/select-show.php"); ?>" method="post" onsubmit="return fn_ValidateForm();">
                <div align="center" style="width: 250px">
                    <br />
                    <table class="style1">
                        <tr>
                            <td align="left">Select a Movie --</td>
                        </tr>
                        <tr>
                            <td align="left">
                                <select id="ddlShowMovie" name="ddlShowMovie" onchange="fn_OnMovieChange();">
                                    <option value="0">--SELECT--</option>
                                    <?php for ($index1 = 0; $index1 < count($p_movie_names); $index1++) { ?>
                                        <option value="<?php echo $p_movie_names[$index1]->value; ?>"><?php echo $p_movie_names[$index1]->text; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">Select a ShowDate --</td>
                        </tr>
                        <tr>
                            <td align="left">
                                <select id="ddlShowDate" name="ddlShowDate" onchange="fn_OnDateChange();"><option value="0">--SELECT--</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">Select a ShowTime --</td>
                        </tr>
                        <tr>
                            <td align="left">
                                <select id="ddlShowTime" name="ddlShowTime"><option value="0">--SELECT--</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <br />
                    <div style="float: right">
                        <input type="image" src="<?php HREF("/content/images/appImages/go.png"); ?>" id="btnGo" title="GO" alt=""  style=" width:40px; height:40px;" />
                    </div>
                </div>
            </form>


        </div>

    </div>
<?php } ?>

<?php

function public_index_head() { ?>
    <link rel="stylesheet" type="text/css"
          href="<?php HREF("/content/resources/wt-rotator.css") ?>" />
    <script type="text/javascript"
    src="<?php HREF("/content/resources/jquery.easing.1.3.min.js") ?>"/>"></script>
    <script type="text/javascript"
    src="<?php HREF("/content/resources/jquery.wt-rotator.min.js") ?>"></script>
    <!--[if lt IE 9]>
    <style>
    .panel {
    border-left:1px solid #444;
    border-right:1px solid #444;
    }
    </style>
    <![endif]-->
    <script type="text/javascript">
                                    $(document).ready(function () {
                                        var $panel = $(".panel");
                                        var $container = $panel.find(".container");

                                        $container.wtRotator({
                                            width: 620,
                                            height: 300,
                                            thumb_width: 24,
                                            thumb_height: 24,
                                            button_width: 24,
                                            button_height: 24,
                                            button_margin: 5,
                                            auto_start: true,
                                            delay: 3000,
                                            transition: "fade",
                                            transition_speed: 800,
                                            block_size: 75,
                                            vert_size: 55,
                                            horz_size: 50,
                                            cpanel_align: "BR",
                                            timer_align: "top",
                                            display_thumbs: false,
                                            display_dbuttons: false,
                                            display_playbutton: false,
                                            display_thumbimg: false,
                                            display_side_buttons: false,
                                            tooltip_type: "",
                                            display_numbers: false,
                                            display_timer: false,
                                            mouseover_pause: true,
                                            cpanel_mouseover: false,
                                            text_mouseover: false,
                                            text_effect: "fade",
                                            text_sync: true,
                                            shuffle: true,
                                            block_delay: 25,
                                            vstripe_delay: 73,
                                            hstripe_delay: 183
                                        });
                                    });
    </script>



<?php } ?>

<?php

function public_index_foot() { ?>
    <script type="text/javascript">
        var showSelectionAjaxBaseUrl = "<?php HREF("/api/ajax.php?do=") ?>";
        function fn_ValidateForm() {
            if ($("#ddlShowMovie").val() == "0") {
                alert("Please select a movie.");
                return false;
            }
            if ($("#ddlShowDate").val() == "0") {
                alert("Please select a date.");
                return false;
            }
            if ($("#ddlShowTime").val() == "0") {
                alert("Please select a time.");
                return false;
            }

            return true;
        }

        function fn_OnMovieChange() {
            $("#ddlShowDate").empty();
            $("#ddlShowDate").html("<option value='0'>Loading...</option>");
            $.ajax({
                url: showSelectionAjaxBaseUrl + "fill-date-list",
                data: '{"pMovieTitle":"' + $("#ddlShowMovie").val() + '"}',
                type: "POST",
                dataType: "json",
                contentType: "application/json",
                success: function (response) {
                    $("#ddlShowDate").empty();
                    $.each(response, function (i, obj) {
                        $("#ddlShowDate").append("<option value='" + obj.value + "'>" + obj.text + "</option>");
                    });
                },
                error: function () {
                    alert("Error in application.");
                }
            });
        }

        function fn_OnDateChange() {
            $("#ddlShowTime").empty();
            $("#ddlShowTime").html("<option value='0'>Loading...</option>");
            $.ajax({
                url: showSelectionAjaxBaseUrl + "fill-time-list",
                data: '{"pMovieTitle":"' + $("#ddlShowMovie").val() + '","pMovieDate":"' + $("#ddlShowDate").val() + '"}',
                type: "POST",
                dataType: "json",
                contentType: "application/json",
                success: function (response) {
                    $("#ddlShowTime").empty();
                    $.each(response, function (i, obj) {
                        $("#ddlShowTime").append("<option value='" + obj.value + "'>" + obj.text + "</option>");
                    });
                },
                error: function () {
                    alert("Error in application.");
                }
            });


        }

    </script>

<?php } ?>

<?php

function public_index_render($p_movie_names, $p_movie_images) {
    app_render("public_index_body", "public_index_head", "public_index_foot", array($p_movie_names, $p_movie_images), array(), array());
}
?>