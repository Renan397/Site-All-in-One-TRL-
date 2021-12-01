<?php
 include_once "config/config.php";
 $css_file = $css."footer.css";
 $img_files = array();
 $img_files[9] = $img."logo_whatsapp1.png";
 $img_files[10] = $img."logo_facebook1.png";
 $img_files[11] = $img."logo_instagram1.png";
 $img_files[12] = $img."logo_gmail1.png";
?>
<html>
<link rel="stylesheet" href="<?=$css_file?>">
</html>

<?php
function footer_home($img_files) {
    echo "<footer id='footer_home'>
    <nav>
    <ul id='imgs_footer'>
    <li><a href='#'><img class='img_footer' src='$img_files[9]'></a></li>
    <li><a href='#'><img class='img_footer' src='$img_files[10]'></a></li>
    <li><a href='#'><img class='img_footer' src='$img_files[11]'></a></li>
    <li><a href='#'><img class='img_footer' src='$img_files[12]'></a></li>
    </ul>
    </nav>
    </footer>";
};
?>
