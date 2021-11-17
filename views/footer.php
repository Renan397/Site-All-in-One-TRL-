<?php
 include_once "config/config.php";
 $css_file = $css."footer.css";
 $img_files = array();
 $img_files[0] = $img."logo_whatsapp1.png";
 $img_files[1] = $img."logo_facebook1.png";
 $img_files[2] = $img."logo_instagram1.png";
 $img_files[3] = $img."logo_gmail1.png";
?>
<html>
<link rel="stylesheet" href="<?=$css_file?>">
</html>

<?php
function footer_home($img_files) {
    echo "<footer id='footer_home'>
    <nav>
    <ul id='imgs_footer'>
    <li><a href='#'><img class='img_footer' src='$img_files[0]'></a></li>
    <li><a href='#'><img class='img_footer' src='$img_files[1]'></a></li>
    <li><a href='#'><img class='img_footer' src='$img_files[2]'></a></li>
    <li><a href='#'><img class='img_footer' src='$img_files[3]'></a></li>
    </ul>
    </nav>
    </footer>";
};
?>
