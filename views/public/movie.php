<?php

function public_movie_head() { ?>
    <link href="<?php HREF("/content/resources/jquery-ui.css"); ?>" rel="stylesheet" />
    <script src="<?php HREF("/content/Scripts/jquery-ui-1.8.20.js"); ?>"></script> <script>
        function fn_OnRdbUpcommingClick() {
            window.location.href = $("#hdnNextUrl").val();
        }
        $(document).ready(function () {
            $(function () {
                $("#accordion").accordion({
                    collapsible: true
                });
                $("#radio").buttonset();
            });
        });
    </script>
    <style type="text/css">
        .style2 {
            width: 100%;
        }
    </style>
    <style type="text/css">
        .style1 {
            width: 100%;
            border-bottom-color: Black;
            border-bottom-style: solid;
            border-bottom-width: 1px;
            border-collapse: collapse;
        }

        .style2 {
            width: 180px;
        }
    </style>
<?php } ?><?php

function public_movie_body($movie_list) {
    ?>
    <div
        style="height: 35px; padding: 0px; margin: 0px; width: 100%; margin-bottom: 15px; display: block; line-height: 35px; vertical-align: middle; text-align: left; color: #FFFFFF; font-size: 15pt; font-weight: bold">
        <div id="radio">
            <input id="hdnNextUrl" type="hidden" value="<?php HREF("/public/movie-upcomming.php"); ?>">
            <input type="radio" id="radio1" name="radio" checked="checked" /><label
                for="radio1">RUNNING MOVIES</label> <input type="radio" id="radio2"
                name="radio" onclick="fn_OnRdbUpcommingClick();" /><label
                for="radio2">UPCOMMING MOVIES</label>
        </div>
    </div>
       <div id="accordion">
        <?php for ($index = 0; $index < count($movie_list); $index++) { ?>
            <h3>
                <a href="javascript:void(0);"><?php echo $movie_list[$index]->Movie_Title; ?></a>
            </h3>
            <div>
                <div style="padding: 5px; margin: 0px auto 0px auto; width: 100%;">

                    <div
                        style="padding: 0px; margin: 5px auto 5px auto; border: 1px solid #000000; width: 600px; height: 300px;">
                        <img src="<?php HREF("/content/images/movieImages/" . $movie_list[$index]->Movie_ImageURL); ?>" style="height: 300px; width: 600px;"
                             alt="" />
                    </div>
                    <div
                        style="padding: 0px; margin: 0px auto 0px auto; width: 100%; height: 218px;">
                        <div style="height: 20px;"></div>
                        <table border="1" class="style1">
                            <tr>
                                <td class="style2"><span
                                        style="height: 30px; display: block; line-height: 30px; vertical-align: middle; text-align: left; color: #000000; font-weight: bold; font-size: 15pt; padding: 0px 0px 0px 10px; margin: 0px">DIRECTOR
                                        : </span></td>
                                <td align="left"><?php echo $movie_list[$index]->Movie_Director; ?></td>
                            </tr>
                            <tr>
                                <td class="style2"
                                    style="border-color: black; border-style: none; border-width: 1px;">
                                    <span
                                        style="height: 30px; display: block; line-height: 30px; vertical-align: middle; text-align: left; color: #000000; font-weight: bold; font-size: 15pt; padding: 0px 0px 0px 10px; margin: 0px">CASTS
                                        : </span>
                                </td>
                                <td rowspan="4">
                                    <div align="left" style="height: 85px"><?php echo $movie_list[$index]->Movie_Casts; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="style2"
                                    style="border-color: black; border-style: none; border-width: 1px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="style2"
                                    style="border-color: black; border-style: none; border-width: 1px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="style2"
                                    style="border-color: black; border-style: none; border-width: 1px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="style2"><span
                                        style="height: 30px; display: block; line-height: 30px; vertical-align: middle; text-align: left; color: #000000; font-weight: bold; font-size: 15pt; padding: 0px 0px 0px 10px; margin: 0px">RELEASE
                                        DATE : </span></td>
                                <td align="left"><?php echo $movie_list[$index]->Movie_ReleaseDate; ?></td>
                            </tr>
                            <tr>
                                <td class="style2"><span
                                        style="height: 30px; display: block; line-height: 30px; vertical-align: middle; text-align: left; color: #000000; font-weight: bold; font-size: 15pt; padding: 0px 0px 0px 10px; margin: 0px">LANGUAGE
                                        : </span></td>
                                <td align="left"><?php echo $movie_list[$index]->Movie_Language; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </div>
<?php } ?>
<?php

function public_movie_render($movie_list) {
    app_render("public_movie_body", "public_movie_head", null, array($movie_list), array(), array());
}
?>