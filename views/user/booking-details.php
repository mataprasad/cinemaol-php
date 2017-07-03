<?php

function user_booking_details_body($ticketData, $SheatInfo, $printOnLoad) {
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <title>CinemaOL | An Online Cinema Ticket Booking System</title>
            <link href="<?php HREF("/content/resources/style.css"); ?>" rel="stylesheet"
                  type="text/css" />
            <link href="<?php HREF("/favicon.ico"); ?>" rel="Shortcut Icon" />
            <style type="text/css">
                #content_ {
                    padding: 5px;
                    margin: 5px auto 0px auto;
                    width: 980px;
                    background-color: #FFFFFF;
                    border: 1px solid #808080;
                    height: 400px;
                }

                .menu__ a {
                    text-decoration: none;
                    font-size: 15px;
                    font-weight: bolder;
                    display: block;
                    width: 175px;
                    height: 20px;
                    line-height: 20px;
                    vertical-align: bottom;
                    text-align: center;
                    float: right;
                    color: #9933FF;
                    background-color: #CCCCCC;
                }

                .menu__ a:hover {
                    text-decoration: none;
                    color: #CCCCCC;
                    font-size: 15px;
                    font-weight: bold;
                    background-color: #6600CC;
                }

                .style1 {
                    width: 100%;
                    border-collapse: separate;
                    padding-left: 10px;
                }

                .style2 {
                    width: 128px;
                }

                .style3 {

                }

                .style4 {
                    width: 128px;
                    height: 21px;
                }

                .style5 {
                    height: 21px;
                }

                #wrapper {
                    border-style: solid solid solid solid;
                    border-width: 1px 1px 1px 1px;
                    border-color: #808080;
                    padding: 5px;
                    margin: 0px auto 0px auto;
                    width: 980px;
                    background-color: #FFFFFF;
                }

                #lblTicketNo {
                    color: Aqua;
                }


                @media print {
                    #LoginRegister a {
                        display: none;
                        visibility: hidden;
                    }
                    #btnPrint {
                        display: none;
                        visibility: hidden;
                    }
                    #lblTicketNo {
                        color: black;
                    }
                }
            </style>

        </head>
        <body>


            <div id="wrapper">
                <div id="header" style="">
                    <div style="width: 300px; height: 100px; float: left;">

                        <img id="logo" src="<?php HREF("/content/images/appImages/logo.png"); ?>"
                             style="height: 100px; width: 300px; border-width: 0px;" />
                    </div>
                    <div style="width: 500px; height: 100px; float: right;">
                        <div id="LoginRegister" class="menu__"
                             style="height: 50%; display: block; vertical-align: top; text-align: right; line-height: 100%;">
                            <a href="javascript:this.close();">Close This Window</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content_">

                <div
                    style="border: 1px solid #333333; padding: 0px; margin: 10px auto 0px auto; width: 600px; height: 380px;">
                    <div
                        style="border-style: none none solid none; border-width: 1px; border-color: #333333; height: 30px; background-color: #6600CC;">
                        <a
                            style="font-size: 15pt; color: White; display: block; vertical-align: middle; line-height: 30px; text-align: justify; margin-left: 7px;">TICKET
                            DETAIL, FOR TICKET NO. : <span id="lblTicketNo"><?php echo $ticketData->Ticket_No; ?></span>
                        </a>&nbsp;
                        <table class="style1">
                            <tr>
                                <td class="style2" style="background-color: #FF9900">Online
                                    Ticket No. :</td>
                                <td class="style3" style="background-color: #FF9900"><span
                                        id="lblOlTktNo" style="color: White; font-weight: bold;"><?php echo $ticketData->Ticket_No; ?></span>
                                </td>
                                <td style="background-color: #FF9900">Booking Date :</td>
                                <td style="background-color: #FF9900"><span
                                        id="lblBookingDate" style="color: White; font-weight: bold;">
                                        <?php echo date_format(date_create($ticketData->Booking_Date),"d/m/Y"); ?></span></td>
                            </tr>
                            <tr>
                                <td class="style2" style="background-color: #FF9900">Show
                                    Date :</td>
                                <td class="style3" style="background-color: #FF9900"><span
                                        id="lblShowDate" style="color: White; font-weight: bold;">
                                        <?php echo date_format(date_create($ticketData->Show_Date),"d/m/Y"); ?></span>
                                </td>
                                <td style="background-color: #FF9900">Show Time :</td>
                                <td style="background-color: #FF9900"><span id="lblShowTime"
                                                                            style="color: White; font-weight: bold;">
                                        <?php echo $ticketData->Show_Time; ?></span></td>
                            </tr>
                            <tr>
                                <td class="style2" style="background-color: #FF9900">Movie
                                    Title :</td>
                                <td class="style3" colspan="3" style="background-color: #FF9900">
                                    <span id="lblMovieTitle" style="color: White; font-weight: bold;">
                                        <?php echo $ticketData->Movie_Name; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="style2" style="background-color: #FF9900">Total
                                    Sheats :</td>
                                <td class="style3" style="background-color: #FF9900"><span
                                        id="lblTotalSheats" style="color: White; font-weight: bold;">
                                        <?php echo count($SheatInfo); ?></span>
                                </td>
                                <td style="background-color: #FF9900">Total Cost :</td>
                                <td style="background-color: #FF9900"><span id="lblTotalCost"
                                                                            style="color: White; font-weight: bold;">
                                    </span></td>
                            </tr>
                            <tr>
                                <td class="style2">&nbsp;</td>
                                <td class="style3">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="style4">Sheat&#39;s Detail : --</td>
                                <td class="style5"></td>
                                <td class="style5"></td>
                                <td class="style5"></td>
                            </tr>
                            <?php $totalCost=0.0; for ($index = 0; $index < count($SheatInfo); $index++) { ?>
                                <tr>
                                    <td class="style4"></td>
                                    <td class="style5"><?php echo $SheatInfo[$index]->text; ?></td>
                                    <td class="style5"><?php echo $SheatInfo[$index]->value; ?></td>
                                    <td class="style5"></td>
                                </tr>
                            <?php $totalCost=$totalCost+$SheatInfo[$index]->value;} ?>
                            <script type="text/javascript">
                                document.getElementById("lblTotalCost").innerHTML="<?php echo $totalCost;?>";                          
                            </script>
                            <tr>
                                <td class="style2">&nbsp;</td>
                                <td class="style3" align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="right"><a id="btnPrint"
                                                     href="javascript:window.print();"
                                                     style="display: block; width: 100px; height: 25px; line-height: 25px; vertical-align: middle; text-align: center; background-color: #6600CC; color: #FFFFFF; font-weight: bold;">PRINT</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div id="footer">
                <div style="height: 20px;">
                    <div style="width: 600px; float: left">
                        <ul
                            style="padding: 0px; margin: 0px; list-style-type: none; height: 20px; width: 600px;">
                            <li style="float: left;">Designed and Developed by Mata Prasad
                                Chauhan</li>
                        </ul>
                    </div>
                    <div style="width: 100px; height: 20px; float: right;">


                        <ul
                            style="padding: 0px; width: 100px; height: 20px; float: right; margin: 0px; list-style-type: none;">
                        </ul>

                    </div>
                </div>
            </div>

        </body>
        <?php if ($printOnLoad) { ?>
            <script type="text/javascript">
                window.print();
            </script> 
        <?php } ?>

    </html>

<?php } ?>