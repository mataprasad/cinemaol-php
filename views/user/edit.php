<?php

function user_edit_head() { ?>
    <style type="text/css">
        .style2 {
            width: 182px;
        }

        .style4 {
            width: 124px;
        }

        .style5 {
            width: 165px;
        }

        .text-box {
            border-color: #993333;
            border-style: solid;
            border-width: 1px;
            width: 150px;
        }
    </style>
    <script type="text/javascript">
        function fn_ValidateForm() {
            if ($("#User_FName").val() == "") {
                alert("Please enter first name.");
                return false;
            }

            if ($("#User_Email").val() == "") {
                alert("Please enter email.");
                return false;
            }

            if ($("#User_City").val() == "") {
                alert("Please enter city.");
                return false;
            }

            if ($("#User_State").val() == "0") {
                alert("Please select state.");
                return false;
            }
            if ($("#User_SQ").val() == "") {
                alert("Please enter security question.");
                return false;
            }
            if ($("#User_SA").val() == "") {
                alert("Please enter security answer.");
                return false;
            }

            return true;
        }
    </script>

<?php } ?>
<?php

function user_edit_body($user_info, $msg, $state_list) {
    ?>

    <form action="<?php HREF("/user/edit.php"); ?>" method="post"
          onsubmit="return fn_ValidateForm();">
        <div style="padding: 0px; margin: 0px; width: 100%; height: 450px;">
            <div
                style="border-style: none none solid none; border-width: 0px 0px 1px 0px; padding: 0px; margin: 0px; width: 200px; height: 40px; float: left; border-bottom-color: #CCCCCC;"></div>
            <div
                style="padding: 0px; margin: 0px; width: 580px; height: 40px; float: left">
                <div style="float: left; height: 40px; width: 580px;">
                    <a href="<?php HREF("/user/index.php"); ?>"
                       style="float: left; border-style: solid none solid solid; border-width: 1px; border-color: #CCCCCC; display: block; width: 90px; line-height: 40px; height: 39px; vertical-align: middle; text-align: center;">MyAccount</a>
                    <a href="<?php HREF("/user/edit.php"); ?>"
                       style="float: left; border-style: solid none none solid; border-width: 1px; border-color: #CCCCCC; display: block; width: 90px; line-height: 40px; height: 39px; vertical-align: middle; text-align: center;">EditProfile</a>
                    <a href="<?php HREF("/user/change-pwd.php"); ?>"
                       style="float: left; border-style: solid none solid solid; border-width: 1px; border-color: #CCCCCC; display: block; width: 135px; line-height: 40px; height: 39px; vertical-align: middle; text-align: center;">ChangePassword</a>
                    <a href="<?php HREF("/user/history.php"); ?>"
                       style="float: left; border-style: solid; border-width: 1px; border-color: #CCCCCC; display: block; width: 135px; line-height: 40px; height: 39px; vertical-align: middle; text-align: center;">BookingHistroy</a>
                    <a
                        style="float: left; border-style: none none solid none; border-width: 1px; border-color: #CCCCCC; display: block; width: 125px; line-height: 39px; height: 40px; vertical-align: middle; text-align: center;"></a>
                </div>

                <div
                    style="border-left: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC; border-top: 1px none #CCCCCC; border-bottom: 1px solid #CCCCCC; padding: 5px; margin: 40px 0px 0px 0px; width: 580px; height: 377px;">
                    <div style="margin: 0px auto 0px auto; width: 360px;">
                        <br />
                        <br />
                        <table style="width: 357px">
                            <tr>
                                <td class="style4">First Name </td>
                                <td class="style5">
                                    <input type="text" id="User_FName" name="user_FName" value="<?php echo $user_info->User_FName; ?>" />
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="style4">Last Name </td>
                                <td class="style5">
                                    <input type="text" id="User_LName" name="user_LName" value="<?php echo $user_info->User_LName; ?>" />
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="style4">Email </td>
                                <td class="style5">
                                    <input type="text" id="User_Email" name="user_Email" value="<?php echo $user_info->User_Email; ?>" />
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="style4">Mobile No. </td>
                                <td class="style5">

                                    <input type="text" id="User_MobileNo" name="user_MobileNo" value="<?php echo $user_info->User_MobileNo; ?>" />
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="style4">Address1</td>
                                <td class="style5">
                                    <input type="text" id="User_Add" name="user_Add" value="<?php echo $user_info->User_Add; ?>" />
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="style4">City </td>
                                <td class="style5">
                                    <input type="text" id="User_City" name="user_City" value="<?php echo $user_info->User_City; ?>" />
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="style4">State </td>
                                <td class="style5">
                                    <select id="ddlState" name="ddlState">
                                        <option value="0">--SELECT--</option>
                                        <?php for ($index = 0; $index < count($state_list); $index++) { ?>
                                            <option value="<?php echo $state_list[$index]->value; ?>"><?php echo $state_list[$index]->text; ?></option>
                                        <?php } ?>
                                    </select>
                                    <script type="text/javascript">
                                        $("#ddlState").val("<?php echo $user_info->User_State; ?>");
                                    </script>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="style4">Security Question </td>
                                <td class="style5">
                                    <input type="text" id="User_SQ" name="user_SQ" value="<?php echo $user_info->User_SQ; ?>" />
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="style4">Security Answer </td>
                                <td class="style5">
                                    <input type="text" id="User_SA" name="user_SA" value="<?php echo $user_info->User_SA; ?>" />
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="style4">&nbsp;</td>
                                <td class="style5">
                                    <input type="image"
                                           src="<?php HREF("/content/images/appImages/btnUpdateProfile.png"); ?>"
                                           style="width: 150px; height: 30px;" />
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="style2" colspan="3">
                                    <?php if ($msg != null) { ?>
                                        <div style="display: block; height: 30px; border: 1px solid #993333; background-color: #FF9900; color: #000000; font-size: 12pt; font-weight: bolder; line-height: 30px; vertical-align: middle; text-align: left; padding: 5px">
                                            <?php echo $msg; ?>
                                        </div>
                                    <?php } ?>

                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
            <div
                style="border-style: none none solid none; border-color: #CCCCCC; padding: 0px; margin: 0px; width: 200px; height: 40px; float: left; border-bottom-width: 1px;"></div>
        </div>
        <input type="hidden" value="0" id="User_Id" name="user_Id" />
    </form>

<?php } ?>


<?php

function user_edit_render($user_info, $msg, $state_list) {
    app_render("user_edit_body", "user_edit_head", null, array($user_info, $msg, $state_list), array(), array());
}
?>