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
<style>
    #footer_home {
    position: absolute;
    width: 100%;
    height: 250px;
    border-radius: 3px;
    background-color: #01477a;
}
#imgs_footer {
    list-style: none;
    margin-left: 40%;
}
.img_footer {
    width: 50px;
    height: 80px;
    float: left;
    padding-left: 7px;
    padding-top: 5%;
    transition: 0.5s;
}
.img_footer:hover {
    transform: scale(1.1);
}
</style>
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
