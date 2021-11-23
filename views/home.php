<!DOCTYPE html>
<html lang="pt-br">
  <?php
  include_once "config/config.php";
  $txt_file = $txt."text_home.php";
  include_once $txt_file;
  $css_file = $css."home.css";
  $js_file = $js."home.js";
  $img_files = array();
  $img_files[0] = $img."logo.png";
  $img_files[1] = $img."foto_luciano.jpg";
  $img_files[2] = $img."foto_renan.jpg";
  $img_files[3] = $img."foto_thiago.jpg";
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
<body>

<div id="conteudo">

<div id="conteudo1">
<br><br><h3 class="titulo_entrada">Bem-Vindo!</h3><br>
<p class="textos" id="txt_entrada"><?=$txt_entrada?></p><br>

<div class="container" id="servicos">
  <div class="row">
    <div class="col-8"><h4 class="titulos">Serviços</h4><hr class="linha_txt">
    <p class="textos"><?=$txt_servicos?></p></div>
    <div class="col-4"><br>
    <div class="col-6" id="slides_servicos">
    <figure>
       <img src="<?=$img_files[1]?>" class="imgs_slides">
       <img src="<?=$img_files[2]?>" class="imgs_slides">
       <img src="<?=$img_files[3]?>" class="imgs_slides">
      </figure>
    </div> 
  </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-8"><h4 class="titulos">TRL Sites</h4><hr class="linha_txt">
    <p class="textos"><?=$txt_historia?></p></div>
    <div class="col-4">
    <br><br><br><img id="img_logo" src="<?=$img_files[0]?>" width = "300px"; height = "250px";>
    </div>
  </div>
</div>


<div class="container" id="equipe">
<h4 class="titulos">Sobre nós</h4><hr class="linha_txt"><br>
  <div class="row">
    <div class="col">
    <img id="foto_luciano" style="border-radius: 50%;" src="<?=$img_files[1]?>"><br><br>
    <p class="textos"><?=$desc_func[0]?></p>
    </div>
    <div class="col">
    <img id="foto_renan" style="border-radius: 50%;" src="<?=$img_files[2]?>"><br><br>
    <p class="textos"><?=$desc_func[1]?></p>
    </div>
    <div class="col">
    <img id="foto_thiago" style="border-radius: 50%;" src="<?=$img_files[3]?>"><br><br>
    <p class="textos"><?=$desc_func[2]?></p>
    </div>
  </div><br>
</div>

<div class="container" id="mvv">
  <div class="row">
    <div class="col-6"> <h4 class="titulos">Missão, Visão e Valores</h4><hr class="linha_txt">
    <p class="textos"><?=$txt_missao_visao_valores?></p>
    </div>
  </div>
</div>

<br><h4 class="titulos">Contato</h4><hr class="linha_txt">
<p class="textos" id="txt_contato"><?=$txt_contato?></p>
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>


</div>
</div>


</body>
<footer>
</footer>
</html>