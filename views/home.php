<!DOCTYPE html>
<html lang="pt-br">
  <?php
  include_once "config/config.php";
  $css_file = $css."home.css";
  $js_file = $js."home.js";
  $img_files = array();
  $img_files[0] = $img."logo.png";
  $img_files[1] = $img."img_mao1.png";
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

<div id="img_logo_trl">
<a href="#"><img src="<?=$img_files[0]?>" width = "270px"; height = "220px"; ></a>
</div>

<div id="texto_entrada">
<h3 class="titulo_entrada">Bem-Vindo!</h3>
<p class="texto_entrada">Em breve, a TRL Sites estará desenvolvendo o website ideal para você e o seu negócio! Oi Renan vagabudno oi!!! OI AGORA VAI</p>
<p>Oi oi</p>
<p>Para de falhar marcio</p>
<img id="img_maozinha" src="<?=$img_files[1]?>" width = "80px"; height = "60px";>
</div>

</div>


</body>
<footer>
  <?php
  include_once "footer.php";
  footer_home($img_files);
  ?>
</footer>
</html>