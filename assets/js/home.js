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

//Site rodando em dispositivos móveis
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