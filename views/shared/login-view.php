
<div style="width: 500px; height: 100px; float: right;">
    <div id="LoginRegister" class="menu_"
         style="height: 50%; display: block; vertical-align: top; text-align: right; line-height: 100%;">
             <?php
             $oUserInfo = NULL;
             $oIsAdmin = FALSE;
             $name = "";

             if (isset($_SESSION["USER_INFO"])) {
                 $oUserInfo = $_SESSION["USER_INFO"];
                 if ($oUserInfo != null) {
                     if (str_word_count($name) > 20) {

                         //$name = $name . substring(0, 20) . toUpperCase();
                     }
                 }
             }

             if (isset($_SESSION["IS_ADMIN"])) {
                 $oIsAdmin = $_SESSION["IS_ADMIN"];
             }
             ?>
             <?php if ($oUserInfo != null) { ?>
            <a href="<?php HREF("/public/logout.php"); ?>">Log Out</a> <a class="xx" style="width: 300px; background-color: #ffffff;" href="" title="Click to go your Account Home !">Welcome <?php echo $name ?></a>
        <?php } else { ?>

            <a href="<?php HREF("/public/login.php"); ?>">Login</a> <a href="<?php HREF("/public/register.php"); ?>">Register</a>
        <?php } ?>

    </div>
    <div class="menu_"
         style="height: 50%; display: block; vertical-align: top; text-align: right; line-height: 100%;">
             <?php if (!$oIsAdmin) { ?>
            <a href="<?php HREF("/public/contact.php"); ?>">Contact Us</a><a href="">About Us</a><a
                href="<?php HREF("/public/movie.php"); ?>">Movies</a><a
                href="<?php HREF("/public/index.php"); ?>">Home</a>
            <?php } else { ?>
            <a href="<?php HREF("/public/index.php"); ?>" style="width: 150px;">Add Movies</a>
            <a href="<?php HREF("/public/index.php"); ?>" style="width: 150px;">Remove Movies</a>
            <a href="<?php HREF("/public/index.php"); ?>" style="width: 150px;">Manage Shows</a>
        <?php } ?>
        <br /> <br />
        <div style="text-align: center;">Your IP is: <?php echo $_SERVER['REMOTE_ADDR'] ?></div>
    </div>
</div>

