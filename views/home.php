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
  $img_files[4] = $img."pacote_mini.jpg";
  $img_files[5] = $img."pacote_medi.png";
  $img_files[6] = $img."pacote_max.png";
  $img_files[7] = $img."missao_visao_valores.png";
  $img_files[8] = $img."bttn_voltar_topo.png";
  ?>
<head>
<title>TRL Sites - Bem-vindo!</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="shortcut icon" type="imagex/png" href="<?=$img_files[0]?>">
<link rel="stylesheet" href="<?=$css_file?>">
<script src="<?=$js_file?>"></script>
</head>
<body id="top">

<header>
  <?php
  include_once "views/menu_home.php";
  ?>
</header>

<div id="conteudo">

<div id="conteudo1">

<br><br><br><br><h3 class="titulo_entrada" id="titulo_entrada">Bem-Vindo!</h3><br>
<p class="textos" id="txt_entrada"><?=$txt_entrada?></p><br>


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
<script>
  function entrou_carrossel() {
    document.getElementById("botao_anterior").style.display = "block";
    document.getElementById("botao_proxima").style.display = "block";
  }
  function saiu_carrossel() {
    document.getElementById("botao_anterior").style.display = "none";
    document.getElementById("botao_proxima").style.display = "none";
  }
</script>
<br>
  
<div id="sobre_redirect" style="height: 67px;"></div>
<div class="container" id="historia">
  <div class="row">
    <div class="col" id="txt_historia_div"><h4 class="titulos">TRL Sites</h4><hr class="linha_txt">
    <p class="textos"><?=$txt_historia?></p></div>
    <div class="col-4" id="img_logo_div">
    <br><br><img id="img_logo" src="<?=$img_files[0]?>" style="width: 300px; height: 250px;">
    </div>
  </div>
</div><br>

<div class="container" id="equipe">
<h4 class="titulos">Sobre nós</h4><hr class="linha_txt"><br>
  <div class="row">
    <div class="col">
    <img class="imgs_sobre" style="border-radius: 50%;" src="<?=$img_files[1]?>"><br><br>
    <center><button onclick="abrir_desc1()" style="background-color: #035794;" id="bttn_abrir_desc1" class="btn btn-primary">Ver mais... 🡳</button></center>
    <p style="display:none" id="text_desc1" class="textos"><?=$desc_func[0]?></p>
    </div>
    <div class="col">
    <img class="imgs_sobre" style="border-radius: 50%;" src="<?=$img_files[2]?>"><br><br>
    <center><button onclick="abrir_desc2()" style="background-color: #035794;" id="bttn_abrir_desc2" class="btn btn-primary">Ver mais... 🡳</button></center>
    <p style="display:none" id="text_desc2" class="textos"><?=$desc_func[1]?></p>
    </div>
    <div class="col">
    <img class="imgs_sobre" style="border-radius: 50%;" src="<?=$img_files[3]?>"><br><br>
    <center><button onclick="abrir_desc3()" style="background-color: #035794;" id="bttn_abrir_desc3" class="btn btn-primary">Ver mais... 🡳</button></center>
    <p style="display:none" id="text_desc3" class="textos"><?=$desc_func[2]?></p>
    </div>
  </div>
</div><br><br>

<script>
  //Efeitos para abrir as descrições da equipe
  function abrir_desc1() {
      document.getElementById("bttn_abrir_desc1").style.display = "none";
      document.getElementById("text_desc1").style.display = "block";
  }
  function abrir_desc2() {
      document.getElementById("bttn_abrir_desc2").style.display = "none";
      document.getElementById("text_desc2").style.display = "block";
  }
  function abrir_desc3() {
      document.getElementById("bttn_abrir_desc3").style.display = "none";
      document.getElementById("text_desc3").style.display = "block";
  }
</script>


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


<img id="back-to-top" alt="Voltar ao topo" style="width: 60px; height: 60px;" src="assets/img/bttn_voltar_topo.png">
<script>
  //Botão de voltar ao topo
  var btn = document.querySelector("#back-to-top");
  btn.addEventListener("click", function() {
  window.scrollTo(0, 0);
});
</script>

<script>
//Site rodando no celular
  function isMobile() {
    var userAgent = navigator.userAgent.toLowerCase();
    return (userAgent.search(/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i) != -1);
}

if (isMobile()) {
   document.getElementById("html").style.zoom = "150%";
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
