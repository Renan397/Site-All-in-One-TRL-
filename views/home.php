<!DOCTYPE html>
<html lang="pt-br">
  <?php
  include_once "config/config.php";
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
<a href="#"><img id="img_logo" src="<?=$img_files[0]?>" width = "270px"; height = "220px"; ></a>

<h3 class="titulo_entrada">Bem-Vindo!</h3><br><br>
<h4 class="titulo_historia">TRL Sites</h4><hr class="linha_txt">
<p class="texto_historia">Nossa organização nasceu a partir do trabalho de conclusão de uma
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

<div class="container" id="equipe" style="width: 100%;">
<h4 class="titulo_sobre_nos">Sobre nós</h4><hr class="linha_txt"><br>
  <div class="row">
    <div class="col">
    <img id="foto_luciano" style="border-radius: 50%;" src="<?=$img_files[1]?>"><br><br>
    <p class="texto_desc_func">Olá, sou o Luciano, gerente, cofundador e
    desenvolvedor front-end da TRL. Tenho 18 anos, sou natural de
    Fortaleza-CE. Atualmente, estou cursando informática para Internet,
    pelo Instituto Federal de Educação, Ciência e Tecnologia - Campus
    Guarulhos, na modalidade ensino médio técnico. Gosto muito de
    desenvolver sistemas, sempre fui apaixonado por tecnologia, amo a
    natureza, sou apaixonado por música e adoro estar conectado com
    meus amigos e familiares.</p>
    </div>
    <div class="col">
    <img id="foto_renan" style="border-radius: 50%;" src="<?=$img_files[2]?>"><br><br>
    <p class="texto_desc_func">Eu sou o Renan, cofundador e
    desenvolvedor front-end da TRL. Tenho 18 anos, sou natural de
    Guarulhos-SP, onde estou me formando em Informática para Internet,
    na modalidade ensino médio técnico, pelo IFSP (Instituto Federal de
    Educação, Ciência e Tecnologia) Campus Guarulhos. Sempre fui
    interessado na área da tecnologia, durante o curso aprendi diversas
    coisas, a grande maioria voltada para a desenvolvimento de sistemas
    para internet. Com meus conhecimentos, desejo auxiliar a empresa a
    construir o melhor sistema para cada cliente.</p>
    </div>
    <div class="col">
    <img id="foto_thiago" style="border-radius: 50%;" src="<?=$img_files[3]?>"><br><br>
    <p class="texto_desc_func">Eu sou o Thiago, cofundador e desenvolvedor
    back-end da TRL-Sites. Tenho 18 anos, natural de Guarulhos-SP,
    cursando informática para internet, pelo Instituto Federal de Tecnologia
    e Ciências – Campus Guarulhos. Tenho prazer em desenvolver
    sistemas e realizar os sonhos dos nossos clientes com um back-end
    funcional e seguro, utilizando as boas práticas que tenho em minha
    bagagem curricular.</p>
    </div>
  </div><br>
  <div id="missao_visao_valores">
    <h4 class="titulo_missao">Missão, Visão e Valores</h4><hr class="linha_txt">
    <p class="texto_missao">Nossa empresa tem o objetivo de transformar ideias em projetos
    reais, com o auxílio da tecnologia. Além disso, vemos como missão do grupo
    TRL oferecer aos seus clientes novas formas de expandir seu negócio, de uma
    forma mais acessível, garantindo a segurança de poder investir em algo que
    vai trazer bons retornos para seus empreendimentos.<br><br>
    Prezamos muito pela ética, pontualidade com as entregas,
    profissionalismo, dedicação, e o trabalho sempre feito com base na pluralidade
    de ideias, sempre ouvindo todos os integrantes e discutindo o que pode ser
    melhorado nos projetos.<br><br>
    No futuro, pretendemos nos tornar uma empresa renomada, possibilitando cada vez
    mais a prestação de serviços de qualidade aos nossos clientes, e nos tornando
    uma referência nacional e internacional, na área de tecnologia da informação.
  </p>
  </div>
</div>

</div>
</div>


</body>
<footer>
</footer>
</html>