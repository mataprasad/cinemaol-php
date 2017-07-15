<?php

function user_history_head() { ?>
    <link href="<?php HREF("/content/css/simplePagination.css"); ?>" rel="stylesheet" />
    <script src="<?php HREF("/content/Scripts/jquery.blockUI.js"); ?>"></script>
    <script src="<?php HREF("/content/Scripts/jquery.simplePagination.js"); ?>"></script>
    <script type="text/javascript">
        function mypopup(url, width1, height1) {
            width = window.screen.width;
            height = window.screen.height;
            mywindow = window.open(url, "CinemaOL",
                    "location=0,status=1,scrollbars=1,resizable=1,menubar=0,toolbar=no,width="
                    + width + ",height=" + height);
            mywindow.moveTo(0, 0);
            mywindow.focus();
        }
    </script>
<?php } ?>
<?php

function user_history_body($data, $total_records) {
    ?>
    <div style="padding: 0px; margin: 0px; width: 100%; height: 450px;">
        <div
            style="border-style: none none solid none; border-width: 0px 0px 1px 0px; padding: 0px; margin: 0px; width: 200px; height: 40px; float: left; border-bottom-color: #CCCCCC;"></div>
        <div
            style="padding: 0px; margin: 0px; width: 580px; height: 40px; float: left">
            <div style="float: left; height: 40px; width: 580px;">
                <a href="<?php HREF("/user/index.php"); ?>"
                   style="float: left; border-style: solid none solid solid; border-width: 1px; border-color: #CCCCCC; display: block; width: 90px; line-height: 40px; height: 39px; vertical-align: middle; text-align: center;">MyAccount</a>
                <a href="<?php HREF("/user/edit.php"); ?>"
                   style="float: left; border-style: solid none solid solid; border-width: 1px; border-color: #CCCCCC; display: block; width: 90px; line-height: 40px; height: 39px; vertical-align: middle; text-align: center;">EditProfile</a>
                <a href="<?php HREF("/user/change-pwd.php"); ?>"
                   style="float: left; border-style: solid none solid solid; border-width: 1px; border-color: #CCCCCC; display: block; width: 135px; line-height: 40px; height: 39px; vertical-align: middle; text-align: center;">ChangePassword</a>
                <a href="<?php HREF("/user/history.php"); ?>"
                   style="float: left; border-style: solid solid none solid; border-width: 1px; border-color: #CCCCCC; display: block; width: 135px; line-height: 40px; height: 39px; vertical-align: middle; text-align: center;">BookingHistroy</a>
                <a
                    style="float: left; border-style: none none solid none; border-width: 1px; border-color: #CCCCCC; display: block; width: 125px; line-height: 39px; height: 40px; vertical-align: middle; text-align: center;"></a>
            </div>

            <div id="divWrapper"
                 style="border-left: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC; border-top: 1px none #CCCCCC; border-bottom: 1px solid #CCCCCC; padding: 5px; margin: 40px 0px 0px 0px; width: 580px; height: 375px;"
                 align="center">
                <br />
                <div id="resultDiv">
                    <?php
                    require_once (ABSPATH . '/views/user/_movie-history.php');
                    partial_render_movie_history($data);
                    ?>
                </div>
                <div class="pagination-holder clearfix"
                     style="margin-top: 5px;">
                    <div id="historyPager"></div>
                </div>
            </div>

        </div>
        <div
            style="border-style: none none solid none; border-color: #CCCCCC; padding: 0px; margin: 0px; width: 200px; height: 40px; float: left; border-bottom-width: 1px;"></div>
        <input type="hidden" id="hdRecordsCount" name="hdRecordsCount"
               value="<?php echo $total_records; ?>" />
        <input type="hidden" id="hdHistoryAjaxUrl" name="hdHistoryAjaxUrl"
               value="<?php HREF("/user/history-ajax.php?id="); ?>" />
    </div>
    <script>
        $('#historyPager').pagination(
                {
                    items: $("#hdRecordsCount").val(),
                    itemsOnPage: 7,
                    cssStyle: 'compact-theme',                  
                    selectOnClick: true,
                    onPageClick: function (pageNo, event) {
                        $("#divWrapper").block();
                        $.ajax({
                            url: $("#hdHistoryAjaxUrl").val() + "&forAjax=1&page=" + pageNo,
                            type: "GET",
                            success: function (response) {
                                $("#resultDiv").html(response);
                                $("#divWrapper").unblock();
                            },
                            error: function (a, b, c) {
                                alert("Error in AJAX call.");
                            }
                        });
                    }
                });
    </script>

<?php } ?>
<?php

function user_history_render($data, $total_records) {
    app_render("user_history_body", "user_history_head", null, array($data, $total_records), array(), array());
}
?>

