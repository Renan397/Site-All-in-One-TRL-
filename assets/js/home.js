function entrou_carrossel() {
    document.getElementById("botao_anterior").style.display = "block";
    document.getElementById("botao_proxima").style.display = "block";
  }
  function saiu_carrossel() {
    document.getElementById("botao_anterior").style.display = "none";
    document.getElementById("botao_proxima").style.display = "none";
  }

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