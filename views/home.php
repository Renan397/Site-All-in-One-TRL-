<!DOCTYPE html>
<html id="html" lang="pt-br">
  <?php
  session_start();
  include_once "config/config.php";
  $txt_file = $txt."text_home.php";
  include_once $txt_file;
  $css_file = $css."home.css";
  $js_file = $js."home.js";
  $img_files = array();
  $img_files[0] = $img."logo.png";
  $img_files[1] = $img."foto_luciano.jpg";
  $img_files[2] = $img."foto_renan.jpg";
  $img_files[3] = $img."foto_thiago.jpeg";
  $img_files[4] = $img."pacote_mini.png";
  $img_files[5] = $img."pacote_medi.png";
  $img_files[6] = $img."pacote_max.png";
  $img_files[7] = $img."missao_visao_valores.png";
  $img_files[8] = $img."bttn_voltar_topo.png";
  $img_files[13] = $img."logo_facebook_serv.png";
  $img_files[14] = $img."logo_instagram_serv.png";
  $img_files[15] = $img."logo_gmail_serv.png";
  $img_files[16] = $img."img_txt_historia2.gif";
  ?>
<head>
<title>TRL Sites - O seu site, a sua evolução!</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- jQuery Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- jQuery Google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="shortcut icon" type="imagex/png" href="<?=$img_files[0]?>">
<link rel="stylesheet" href="<?=$css_file?>">
<script src="<?=$js_file?>"></script>
</head>
<body id="top_redirect">

<header>
  <?php
  include_once "views/menu_home.php";
  ?>
</header>

<div id="conteudo">

<div id="conteudo1">

<br><br><br><br><h3 class="titulo_entrada" id="titulo_entrada">Bem-vindo(a)!</h3><br>
<p class="textos" id="txt_entrada"><?=$txt_entrada?></p><br>

<div id="servicos_redirect" style="height: 20px;"></div>
<div class="container" id="servicos">
  <div class="row">
    <div class="col-12"><h4 class="titulos">Serviços</h4><hr class="linha_txt">
    <p class="textos"><?=$txt_servicos?></p>
  </div>
  </div>
</div>

<div onmouseover="entrou_carrossel()" onmouseout="saiu_carrossel()" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?=$img_files[4]?>" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=$img_files[5]?>" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=$img_files[6]?>" alt="Terceiro Slide">
    </div>
  </div>
  <div class="botoes_carrossel_div" id="botao_anterior">
    <a id="botoes_carrossel_botao" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
    </a>
    </div>
    <div class="botoes_carrossel_div" id="botao_proxima">
      <a id="botoes_carrossel_botao" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
      </a>
    </div>
</div>
<br><br>

  <div class="container" id="redes_serv">
  <div class="row">
    <div class="col-12">
    <h4 class="titulos">Redes Sociais</h4><hr class="linha_txt">
    <p class="textos" id="txt_redes_serv"><?=$desc_redes[0]?></p><br></div>
    <div class="row">
    <div class="col">
    <img src="<?=$img_files[13]?>" class="img_redes_serv"><br>
    <p><?=$desc_redes[1]?></p>
    </div>
    <div class="col">
    <img src="<?=$img_files[14]?>" class="img_redes_serv"><br>
    <p><?=$desc_redes[2]?></p>
    </div>
    <div class="col">
    <img src="<?=$img_files[15]?>" class="img_redes_serv"><br>
    <p><?=$desc_redes[3]?></p>
    </div>
  </div>
  </div>
  </div>

  <div id="sobre_redirect" style="height: 80px;"></div>
<div class="container" id="historia">
  <div class="row">
    <div class="col" id="txt_historia_div"><h4 class="titulos">TRL Sites</h4><hr class="linha_txt">
    <p class="textos"><?=$txt_historia?></p>
    <button id="verMais_historia"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#0069b3" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/></svg></button>
    <p class="textos" id="txt_historia2"><?=$txt_historia2?></p>
    <img id="img_verMais_historia" src="<?=$img_files[16]?>" style="display: block; margin-right: auto; margin-left: auto; width: 500px; height: 250px;">
    </div>
    <div class="col-4" id="img_logo_div">
    <br><br><img id="img_logo" src="<?=$img_files[0]?>" style="width: 300px; height: 250px;">
    </div>
  </div>
</div><br>

<div class="container" id="equipe">
<h4 class="titulos">Sobre nós</h4><hr class="linha_txt"><br>
  <div class="row">
    <div class="col">
    <img class="imgs_sobre" style="border-radius: 50%;" src="<?=$img_files[1]?>"><br>
    <h4 class="nomes">Luciano</h4><br>
    <center><span class="spans_sobre">Gerente</span><br><br><span class="spans_sobre">Front-end</span><br><br><span class="spans_sobre">Divulgação</span><br><br></center><br>
    <button style="display: block; margin-right: auto; margin-left: auto; background: radial-gradient(circle, rgba(17,132,205,1) 0%, rgba(0,212,255,1) 0%, rgba(0,110,182,1) 0%, rgba(0,87,148,1) 76%, rgba(0,186,223,1) 94%, rgba(0,186,223,1) 100%);" id="bttn_abrir_desc1" class="btn btn-primary">Ver mais... <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/></svg></button>
    <p style="display:none" id="text_desc1" class="textos"><?=$desc_func[0]?></p>
    </div>
    <div class="col">
    <img class="imgs_sobre" style="border-radius: 50%;" src="<?=$img_files[2]?>"><br>
    <h4 class="nomes">Renan</span></h4><br>
    <center><span class="spans_sobre">Front-end</span><br><br><span class="spans_sobre">Design</span><br><br></center><br>
    <button style="display: block; margin-right: auto; margin-left: auto; background: radial-gradient(circle, rgba(17,132,205,1) 0%, rgba(0,212,255,1) 0%, rgba(0,110,182,1) 0%, rgba(0,87,148,1) 76%, rgba(0,186,223,1) 94%, rgba(0,186,223,1) 100%);" id="bttn_abrir_desc2" class="btn btn-primary">Ver mais... <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/></svg></button>
    <p style="display:none" id="text_desc2" class="textos"><?=$desc_func[1]?></p>
    </div>
    <div class="col">
    <img class="imgs_sobre" style="border-radius: 50%;" src="<?=$img_files[3]?>"><br>
    <h4 class="nomes">Thiago</h4><br>
    <center><span class="spans_sobre">Back-end</span><br><br><span class="spans_sobre">Fluxo de dados</span><br><br></center><br>
    <button style="display: block; margin-right: auto; margin-left: auto; background: radial-gradient(circle, rgba(17,132,205,1) 0%, rgba(0,212,255,1) 0%, rgba(0,110,182,1) 0%, rgba(0,87,148,1) 76%, rgba(0,186,223,1) 94%, rgba(0,186,223,1) 100%);" id="bttn_abrir_desc3" class="btn btn-primary">Ver mais... <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/></svg></button>
    <p style="display:none" id="text_desc3" class="textos"><?=$desc_func[2]?></p>
    </div>
  </div>
</div><br><br>


<br><br><div class="container" id="mvv">
  <div class="row">
    <div class="col-6" id="txt_mvv_div"> <h4 class="titulos">Missão, Visão e Valores</h4><hr id="linha_txt_mvv">
    <p class="textos"><?=$txt_missao_visao_valores?></p>
    </div>
    <div class="col-6" id="img_mvv_div">
    <img id="img_logo" src="<?=$img_files[7]?>">
    </div>
  </div>
</div>

<div id="contato_redirect" style="height: 67px;"></div>
<br><h4 class="titulos" id="contato">Contato</h4><hr class="linha_txt">
<p class="textos" id="txt_contato"><?=$txt_contato?></p>
<?php 
include_once "views/ctt_home.php";
if(isset($_SESSION['msg'])){
  echo $_SESSION['msg'];
  unset ($_SESSION['msg']);
}
?>


<?php
include_once "views/footer_home.php";
?>
</div>
</div>

<script>
//Site rodando no celular
  function isMobile() {
    var userAgent = navigator.userAgent.toLowerCase();
    return (userAgent.search(/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i) != -1);
}

if (isMobile()) {
   document.getElementById("html").style.zoom = "150%";
   document.getElementById("carouselExampleControls").style.width = "100%";
   document.getElementById("txt_historia_div").classList.remove("col");
   document.getElementById("txt_historia_div").classList.add("col-10");
   document.getElementById("img_logo_div").classList.remove("col-4");
   document.getElementById("img_logo_div").classList.add("col-10");
   document.getElementById("txt_mvv_div").classList.remove("col-6");
   document.getElementById("txt_mvv_div").classList.add("col-10");
   document.getElementById("img_mvv_div").classList.remove("col-6");
   document.getElementById("img_mvv_div").classList.add("col-10");
}
</script>

</body>
<footer>
</footer>
</html>
