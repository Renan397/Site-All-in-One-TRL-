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
.img_footer {
width: 50px;
height: 50px;
transition: 0.5s;
}

.img_footer:hover {
transform: scale(1.1);
}
#myFooter {
    background-color: #01477a;
    color: white;
    padding-top: 30px;
}

#myFooter .footer-copyright {
    background-color: #0164ac;
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: center;
}

#myFooter .row {
    margin-bottom: 60px;
}

#myFooter .navbar-brand {
    margin-top: 45px;
    height: 65px;
}

#myFooter .footer-copyright p {
    margin: 10px;
    color: #ccc;
}

#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter h2 a{
    font-size: 50px;
    text-align: center;
    color: #fff;
}

#myFooter a {
    color: #d2d1d1;
    text-decoration: none;
}

#myFooter a:hover,
#myFooter a:focus {
    text-decoration: none;
    color: white;
}

#myFooter .social-networks {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 16px;
}

#myFooter .social-networks a {
    font-size: 32px;
    color: #f9f9f9;
    padding: 10px;
    transition: 0.2s;
}

#myFooter .social-networks a:hover {
    text-decoration: none;
}

#myFooter .facebook:hover {
    color: #0077e2;
}

#myFooter .instagram:hover {
    color: purple;
}

#myFooter .twitter:hover {
    color: #00aced;
}

#myFooter .btn {
    color: white;
    background-color: #d84b6b;
    border-radius: 20px;
    border: none;
    width: 150px;
    display: block;
    margin: 0 auto;
    margin-top: 10px;
    line-height: 25px;
}

@media screen and (max-width: 767px) {
    #myFooter {
        text-align: center;
    }
}
</style>
<footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <h5>Início</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                    </ul>
                </div>
                <div class="col-sm-6"><br><br>
                    <ul>
                        <li><p><b>Telefone:</b> <br>(11) 96035-1235<br> (11) 96726-3940<br> (11) 94272-1549</p></li><br>
                        <li><p><b>Endereço:</b> Av. Salgado Filho, 3501 - Centro, Guarulhos - SP</p></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="https://api.whatsapp.com/send?phone=551196035-1235&text=sua%20mensagem" class="whatsapp" target="_blank"><img class='img_footer' src='<?=$img_files[9]?>'></i></a>
                        <a href="#" class="facebook"><img class='img_footer' src='<?=$img_files[10]?>'></i></a>
                        <a href="#" class="instagram"><img class='img_footer' src='<?=$img_files[11]?>'></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2021 Copyright - TRL Sites</p>
        </div>
    </footer>
</html>
