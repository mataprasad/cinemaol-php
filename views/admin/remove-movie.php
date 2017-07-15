<?php

function admin_remove_movie_head() { ?>
    <script type="text/javascript">
        function fn_ValidateForm() {
            if ($("input[name='selectedMovies']:checked").length < 1) {
                alert("Select atleast one movie to remove.");
                return false;
            }

            var selectedValue = new Array();
            $("input[name='selectedMovies']:checked").each(function (i, obj) {
                selectedValue.push($(obj).val());
            });

            $("#hdSelectedMovie").val(JSON.stringify(selectedValue));

            return    confirm("Are you sure for this action?");
        }
    </script>
<?php } ?>
<?php

function admin_remove_movie_body($msg, $movie_list) {
    //echo var_dump($movie_list);
    ?>
    <form action="<?php HREF("/admin/remove-movie.php"); ?>" method="post" onsubmit="return fn_ValidateForm();">
        <input type="hidden" name="hdSelectedMovie" id="hdSelectedMovie"/>
        <div style="padding: 0px; margin: 0px; border: 1px solid #3333CC">
            <div>
                <div style="border-style: none none solid none; border-width: 1px; border-color: #333333; height: 30px; background-color: #6600CC;">
                    <a style="font-size: 15pt; color: White; display: block; vertical-align: middle; line-height: 30px; text-align: justify; margin-left: 7px;">REMOVE MOVIE HERE --</a>
                </div>
            </div>
            <div align="center">
                <?php if ($msg != NULL) { ?>
                    <p style="color: red;"><?php echo $msg; ?></p>
                <?php } ?>
                <table cellspacing="0" cellpadding="3" rules="all" border="1" style="width: 100%; background-color: White; border-color: #CCCCCC; border-width: 1px; border-style: None; border-collapse: collapse;">
                    <tr style="color: White; background-color: #006699; font-weight: bold;">
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Select</th>
                    </tr>
                    <?php for ($index = 0; $index < count($movie_list); $index++) { ?>
                        <tr style="color: #000066;">
                            <td><?php echo $movie_list[$index]->Movie_Title; ?></td>
                            <td><?php echo $movie_list[$index]->MovieStatus_Value; ?></td>
                            <td><?php echo $movie_list[$index]->Movie_ReleaseDate; ?></td>
                            <td>
                                <input id="selectedMovies" type="checkbox" value="<?php echo $movie_list[$index]->Movie_Id; ?>" name="selectedMovies" />
                            </td>
                        </tr> 
                    <?php } ?>
                </table>
                <br />
                <input type="submit" id="btnRemove" value="Remove" />
                <br />
                <br />
            </div>
        </div>
    </form>
<?php } ?>
<?php

function admin_remove_movie_render($msg, $movie_list) {
    app_render("admin_remove_movie_body", "admin_remove_movie_head", null, array($msg, $movie_list), array(), array());
}
?>


