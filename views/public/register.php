<?php

function public_register_head() { ?>
    <style type="text/css">
        .style1 {
            width: 100%;
        }

        .style2 {
            width: 192px;
        }

        .style3 {
            width: 163px;
        }

        .style4 {
            height: 34px;
        }

        .style5 {
            width: 192px;
            height: 34px;
        }

        .style6 {
            width: 163px;
            height: 34px;
        }
    </style>

    <script type="text/javascript">
        function fn_ValidateForm() {
            if ($("#txtFName").val() == "") {
                alert("Please enter first name.");
                return false;
            }

            if ($("#txtUName").val() == "") {
                alert("Please enter user name.");
                return false;
            }

            if ($("#txtUName").val() == "") {
                alert("Please enter user name.");
                return false;
            }

            if ($("#txtPass").val() == "") {
                alert("Please enter password.");
                return false;
            }

            if ($("#txtRePass").val() == "") {
                alert("Please enter re-type password.");
                return false;
            }

            if ($("#txtRePass").val() != $("#txtPass").val()) {
                alert("Enter passord and re-type password does not matched.");
                return false;
            }

            if ($("#txtEmail").val() == "") {
                alert("Please enter email.");
                return false;
            }

            if ($("#txtCity").val() == "") {
                alert("Please enter city.");
                return false;
            }

            if ($("#ddlState").val() == "0") {
                alert("Please select state.");
                return false;
            }
            if ($("#txtSQ").val() == "") {
                alert("Please enter security question.");
                return false;
            }
            if ($("#txtSA").val() == "") {
                alert("Please enter security answer.");
                return false;
            }

            if ($("#txtVeriCode").val() == "") {
                alert("Please enter verification code.");
                return false;
            }

            return true;
        }

        function fn_RefreshCaptcha() {
            $('#captchaImage').attr("src", '<?php HREF("/lib/phpcaptcha/captcha.php") . "?" . microtime(); ?>');
        }
    </script>
<?php } ?>

<?php

function public_register_body($errorMsg, $state_list) {
    ?>

    <form action="<?php HREF("/public/register.php"); ?>" method="post"
          onsubmit="return fn_ValidateForm();">
        <div
            style="padding: 10px; margin: 0px auto 0px auto; width: 800px; text-align: center;">
            <div
                style="border: 1px solid #333333; padding: 0px; margin: 0px auto 0px auto; width: 600px; height: 570px;">
                <div
                    style="border-style: none none solid none; border-width: 1px; border-color: #333333; height: 30px; background-color: #6600CC;">
                    <a
                        style="font-size: 15pt; color: White; display: block; vertical-align: middle; line-height: 30px; text-align: justify; margin-left: 7px;">REGISTER
                        HERE</a>
                </div>
                <div>
                    <p style="color: red;"><?php echo $errorMsg; ?></p>
                    <table class="style1">
                        <tr>
                            <td>&nbsp;</td>
                            <td class="style2">&nbsp;</td>
                            <td class="style3">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">First Name :</td>
                            <td align="left" class="style3"><input type="text"
                                                                   name="txtFName" id="txtFName" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">Last Name :</td>
                            <td align="left" class="style3"><input type="text"
                                                                   name="txtLName" id="txtLName" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">User Name :</td>
                            <td align="left" class="style3"><input type="text"
                                                                   name="txtUName" id="txtUName" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">Password :</td>
                            <td align="left" class="style3"><input type="password"
                                                                   name="txtPass" id="txtPass" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">Re-type Password :</td>
                            <td align="left" class="style3"><input type="password"
                                                                   name="txtRePass" id="txtRePass" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">Email Id :</td>
                            <td align="left" class="style3"><input type="text"
                                                                   name="txtEmail" id="txtEmail" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">Mobile No :</td>
                            <td align="left" class="style3"><input type="text"
                                                                   name="txtMobile" id="txtMobile" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">Address Line 1 :</td>
                            <td align="left" class="style3"><input type="text"
                                                                   name="txtAdd1" id="txtAdd1" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">Address Line 2 (Optional) :</td>
                            <td align="left" class="style3"><input type="text"
                                                                   name="txtAdd2" id="txtAdd2" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">City :</td>
                            <td align="left" class="style3"><input type="text"
                                                                   name="txtCity" id="txtCity" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">State :</td>
                            <td align="left" class="style3">
                                <select id="ddlState" name="ddlState"
                                        style="border-color: #993333; border-style: solid; border-width: 1px;  width: 150px;">
                                    <option value="0">--SELECT--</option>
                                    <?php for ($index = 0; $index < count($state_list); $index++) { ?>
                                        <option value="<?php echo $state_list[$index]->value; ?>"><?php echo $state_list[$index]->text; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">Security Question :</td>
                            <td align="left" class="style3"><input type="text"
                                                                   name="txtSQ" id="txtSQ" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">Security Answer :</td>
                            <td align="left" class="style3"><input type="text"
                                                                   name="txtSA" id="txtSA" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">Verification Code :</td>
                            <td align="left" class="style3" rowspan="2" id="tdCaptcha">
                                <img id="captchaImage" src=""
                                     style="border-color: #993333; border-style: solid; border-width: 1px; height: 40px; width: 150px;"/>
                                <script>
                                    fn_RefreshCaptcha();
                                </script>
                            </td>
                            <td align="left" valign="middle"><a href="javascript:void(0);"
                                                                onclick="fn_RefreshCaptcha();" title="reload verification code."
                                                                style="padding: 0px; margin: 0px; background-image: url('<?php HREF("/content/resources/refresh.png"); ?>'); vertical-align:
                                                                sub; background-repeat:no-repeat; width: 30px; height: 30px; display:block; position: relative;top: 15px;"></a></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">Enter Verification Code :</td>
                            <td align="left" class="style3"><input type="text"
                                                                   name="txtVeriCode" id="txtVeriCode" value=""
                                                                   style="border-color: #993333; border-style: solid; border-width: 1px; width: 150px;" />
                            </td>
                            <td align="left"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left" class="style2">&nbsp;</td>
                            <td align="left" class="style3"><input type="image"
                                                                   src="<?php HREF("/content/images/appImages/btnRegister.png"); ?>" style="height: 30px; width: 100px;" />
                            </td>
                            <td align="left">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="style4"></td>
                            <td align="left" class="style5"></td>
                            <td align="left" class="style6">&nbsp;</td>
                            <td align="left" class="style4"></td>
                            <td class="style4"></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </form>

<?php } ?>
<?php

function public_register_render($errorMsg, $state_list) {
    app_render("public_register_body", "public_register_head", null, array($errorMsg, $state_list), array(), array());
}
?>
