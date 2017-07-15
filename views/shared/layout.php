<?php

function app_render($fn_body, $fn_header_section, $fn_footer_section, $param_fn_body, $param_fn_header_section, $param_fn_footer_section) { ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <title>CinemaOL | An Online Cinema Ticket Booking System</title>
            <script type="text/javascript">
                window.history.forward(1);
            </script>
            <script type="text/javascript" src="<?php HREF("/content/js/jquery-1.6.1.min.js"); ?>"></script>
            <script type="text/javascript">
                var rev = "fwd";
                function titlebar(val) {
                    var msg = "CinemaOL | An Online Cinema Ticket Booking System";
                    var res = " ";
                    var speed = 100;
                    var pos = val;

                    msg = "" + msg + "";
                    var le = msg.length;
                    if (rev == "fwd") {
                        if (pos < le) {
                            pos = pos + 1;
                            scroll = msg.substr(0, pos);
                            document.title = scroll;
                            timer = window.setTimeout("titlebar(" + pos + ")", speed);
                        } else {
                            rev = "bwd";
                            timer = window.setTimeout("titlebar(" + pos + ")", speed);
                        }
                    } else {
                        if (pos > 0) {
                            pos = pos - 1;
                            var ale = le - pos;
                            scrol = msg.substr(ale, le);
                            document.title = scrol;
                            timer = window.setTimeout("titlebar(" + pos + ")", speed);
                        } else {
                            rev = "fwd";
                            timer = window.setTimeout("titlebar(" + pos + ")", speed);
                        }
                    }
                }

                titlebar(0);
            </script>

            <?php
            if ($fn_header_section != null) {
                //$fn_header_section();
                call_user_func_array($fn_header_section, $param_fn_header_section);
            }
            ?>
            <link href="<?php HREF("/content/css/style.css"); ?>" rel="stylesheet" type="text/css" />
            <link href="<?php HREF("/favicon.ico"); ?>" rel="Shortcut Icon" />
        </head>
        <body>
            <div id="wrapper">
                <div id="header">
                    <div style="width: 300px; height: 100px; float: left;">
                        <a href="<?php HREF("/public/index.php"); ?>">
                            <img src="<?php HREF("/content/images/appImages/logo.png"); ?>"  height="100px" width="300px" alt="CinemaOL" id="logo" />
                        </a>
                    </div>

                    <?php require_once ("login-view.php"); ?>

                </div>
            </div>
            <div id="content">
                <?php
                if ($fn_body != null) {
                    //$fn_body();
                    call_user_func_array($fn_body, $param_fn_body);
                }
                ?>
            </div>

            <div id="footer">
                <div style="height: 20px;">
                    <div style="width: 600px; float: left">
                        <ul style="padding: 0px; margin: 0px; list-style-type: none; height: 20px; width: 600px;">
                            <li style="float: left;">Designed and Developed by Mata Prasad Chauhan.
                                All Rights Reserved &copy; 2012
                            </li>
                        </ul>
                    </div>
                    <div style="width: 100px; height: 20px; float: right;">


                        <ul style="padding: 0px; width: 100px; height: 20px; float: right; margin: 0px; list-style-type: none;">
                            <li style="float: right; height: 20px; width: 100px; margin: 0px; padding: 0px;">
                                <a href="<?php echo ABS_URL() . "/public/admin-login.php"; ?>"
                                   style="width: 100px; height: 20px; display: block; line-height: 20px; vertical-align: middle; text-align: center; color: #808000; text-decoration: underline; font-weight: bold; font-size: 12pt;">Admin Login  </a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <?php
            if ($fn_footer_section != null) {
                //$fn_footer_section();
                call_user_func_array($fn_footer_section, $param_fn_footer_section);
            }
            ?>
        </body>
    </html>


<?php } ?>