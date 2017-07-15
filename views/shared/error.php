<?php

function shared_error_body($msg) { ?>

    <h1 style="color:red;">
        Unable to process your request. Please try after some times. 
    </h1>
    <p>
    <?php echo $msg; ?>
    </p>
<?php } ?><?php

function render_error($msg) {
    if ($msg == NULL) {
        $msg = "";
    }
    app_render("shared_error_body", null, null, array($msg), array(), array());
}
?>