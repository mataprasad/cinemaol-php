<?php

function public_contact_head() { ?>
    <style type="text/css">
        .style2 {
            width: 100%;
        }

        .style3 {
            width: 121px;
        }

        .style4 {
            width: 9px;
        }

        .style5 {
            width: 121px;
            height: 22px;
        }

        .style6 {
            height: 22px;
        }
    </style>
    <script type="text/javascript">
        function fn_ValidateForm() {
            if ($("#txtName").val() == "") {
                alert("Please enter name.");
                return false;
            }
            if ($("#txtEmail").val() == "") {
                alert("Please enter email.");
                return false;
            }
            if ($("#txtViews").val() == "") {
                alert("Please enter feedback.");
                return false;
            }
            return true;
        }
    </script>
<?php } ?>
<?php

function public_contact_body($msg) {
    ?>


    <form action="<?php HREF("/public/contact.php"); ?>" method="post"
          onsubmit="return fn_ValidateForm();">
        <div
            style="padding: 10px; margin: 0px auto 0px auto; width: 800px; text-align: center; height: 700px;">
            <div
                style="border: 1px solid #333333; padding: 0px; margin: 0px auto 0px auto; width: 600px; height: 700px;">
                <div
                    style="border-style: none none solid none; border-width: 1px; border-color: #333333; height: 30px; background-color: #6600CC;">
                    <a
                        style="font-size: 15pt; color: White; display: block; vertical-align: middle; line-height: 30px; text-align: justify; margin-left: 7px;">CONTACT US</a>
                </div>
                <div align="left"
                     style="margin: 0px; padding: 10px; height: 120px">
                    Any one want to contact us can contact at --<br />
                    <br />
                    Mata Prasad Chauhan
                    <br />
                    call@ : +91-8802524849<br />
                    mail@ : <a href="mailto:cinemaol.asct@gmail.com">cinemaol.asct@gmail.com</a>
                </div>
                <div
                    style="padding: 0px 0px 0px 10px; margin: 0px; height: 25px; border: 1px solid #333333; background-color: #6600CC; color: #FFFFFF; display: block; line-height: 25px; vertical-align: middle; text-align: left; font-weight: bold; font-size: 11pt;">
                    PLEASE LEAVE YOUR CONCERNS AND FEEDBACK HERE ---
                </div>
                <div>
                    <?php if ($msg != NULL && $msg != "") { ?>
                        <span style="color: red;"><?php echo $msg; ?></span>
                    <?php } ?>
                    <table class="style2">
                        <tr>
                            <td align="left" class="style3">&nbsp;</td>
                            <td class="style4">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">Your Name :</td>
                            <td align="left" class="style4">
                                <input type="text" id="txtName"
                                       name="txtContact"
                                       style="border-color: #993333; border-style: solid; border-width: 1px; width: 165px;" />
                            </td>
                            <td align="left"></td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">Address :</td>
                            <td align="left" rowspan="2" class="style4">
                                <textarea id="txtAddress" name="txtAddress"
                                          style="border-color: #993333; border-style: solid; border-width: 1px; height: 125px; width: 165px;"></textarea>
                            </td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">ContactNo :</td>
                            <td align="left" class="style4">
                                <input type="text" id="txtContact"
                                       name="txtContactNo"
                                       style="border-color: #993333; border-style: solid; border-width: 1px; width: 165px;" />
                            </td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">Email :</td>
                            <td align="left" class="style4">
                                <input type="text" id="txtEmail"
                                       name="txtEmail"
                                       style="border-color: #993333; border-style: solid; border-width: 1px; width: 200px;" />
                            </td>
                            <td align="left"></td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">Your Views : :</td>
                            <td align="left" class="style4" rowspan="6">
                                <textarea id="txtViews" name="txtViews"
                                          style="border-color: #993333; border-style: solid; border-width: 1px; height: 125px; width: 200px;"></textarea>
                            </td>
                            <td align="left"></td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style5"></td>
                            <td align="left" class="style6"></td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">&nbsp;</td>
                            <td align="left" class="style4">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style3">&nbsp;</td>
                            <td align="left" class="style4">
                                <input type="image"
                                       style="height: 25px; width: 100px;"
                                       src="<?php HREF("/content/images/appImages/btnSubmit.png"); ?>" />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </form>

<?php } ?>

<?php

function public_contact_render($msg) {
    app_render("public_contact_body", "public_contact_head", null, array($msg), array(), array());
}
?>

