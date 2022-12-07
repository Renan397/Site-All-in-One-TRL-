function entrou_carrossel() {
    document.getElementById("botao_anterior").style.display = "block";
    document.getElementById("botao_proxima").style.display = "block";
  }
  function saiu_carrossel() {
    document.getElementById("botao_anterior").style.display = "none";
    document.getElementById("botao_proxima").style.display = "none";
  }

$(document).ready(function(){
  $("#img_verMais_historia").css("display", "none");

  $("#bttn_abrir_desc1").click(function(){
    $("#bttn_abrir_desc1").hide();
    $("#text_desc1").fadeIn();
  });

  $("#bttn_abrir_desc2").click(function(){
    $("#bttn_abrir_desc2").hide();
    $("#text_desc2").fadeIn();
  });

  $("#bttn_abrir_desc3").click(function(){
    $("#bttn_abrir_desc3").hide();
    $("#text_desc3").fadeIn();
  });

  $("#verMais_historia").click(function(){
    $("#verMais_historia").hide();
    $("#txt_historia2").slideDown();
    $("#img_verMais_historia").slideDown();
  });
});