
<?php

function public_about_head() { ?>
    <style type="text/css">
        .style2 {
            width: 100%;
        }

        .style4 {
            width: 182px;
        }

        .style5 {
            width: 223px;
        }
    </style>
<?php } ?>

<?php

function public_about_body() {
    ?>
    <div
        style="padding: 10px; margin: 0px auto 0px auto; width: 800px; text-align: center;">
        <div
            style="border: 1px solid #333333; padding: 0px; margin: 0px auto 0px auto; width: 600px; height: 200px;">
            <div
                style="border-style: none none solid none; border-width: 1px; border-color: #333333; height: 30px; background-color: #6600CC;">
                <a
                    style="font-size: 15pt; color: White; display: block; vertical-align: middle; line-height: 30px; text-align: justify; margin-left: 7px;">ABOUT US - THE DEVELOPMENT TEAM...</a>
            </div>
            <div align="left">

                <table class="style2">
                    <tr>
                        <td class="style5">
                            &nbsp;</td>
                        <td class="style4">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            This project is designed and developed by the team members --</td>
                    </tr>
                    <tr>
                        <td class="style5">
                            &nbsp;</td>
                        <td class="style4">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>



                    <tr>
                        <td class="style5">
                            01. Mata Prasad Chauhan</td>
                        <td class="style4">
                            &nbsp;</td>
                        <td>
                            +91-8802524849</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<?php } ?>

<?php

function public_about_render() {
    app_render("public_about_body", "public_about_head", null, array(), array(), array());
}
?>