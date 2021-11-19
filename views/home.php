<!DOCTYPE html>
<html lang="pt-br">
  <?php
  include_once "config/config.php";
  $css_file = $css."home.css";
  $js_file = $js."home.js";
  $img_files = array();
  $img_files[0] = $img."logo.png";
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
<a href="#"><img id="img_logo" src="<?=$img_files[0]?>" width = "270px"; height = "220px"; ></a>

<h3 class="titulo_entrada">Bem-Vindo!</h3><br><br>
<h4 class="titulo_historia">História</h4>
<p class="historia">Nossa organização nasceu a partir do trabalho de conclusão de uma
matéria no curso de informática para Internet, no qual foi necessário o
desenvolvimento de um site. Por isso, Luciano Júnior, Thiago Martins e Renan
Santos decidiram montar uma empresa para padronizar e profissionalizar o site
a ser desenvolvido. Depois de muitas reuniões, decidiram em conjunto o nome
da empresa como TRL Sites, porque tem as iniciais dos seus fundadores, estas
são as três forças da empresa, comprovando o conjunto de ideias que
apresentam. Por outro lado, nossa logomarca enfatiza a importância do uso da
Internet, pois com ela é possível estabelecer conexões com todos os lugares
do planeta, formando assim uma conexão extraordinária que pode mudar
completamente a sociedade. Como ideia principal, que é buscar o
desenvolvimento profissional de nossos clientes, a TRL Sites disponibiliza o
seu site e a sua evolução!</p>

<div class="container" id="equipe">
  <div class="row">
    <div class="col">
      Luciano
    </div>
    <div class="col">
     Renan
    </div>
    <div class="col">
      Thiago
    </div>
  </div>
</div>
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