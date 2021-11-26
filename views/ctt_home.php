<form class="row g-3" id="form_ctt">
  <div class="col-md-6">
    <label class="form-label">Nome:</label>
    <input type="text" required = "required" placeholder="Digite aqui o seu nome..." id="campo_nome" onfocus="clicou_campo_nome()" onblur="nao_clicou_campo_nome()" class="form-control"><br>
    <label class="form-label">Email:</label>
    <input type="email" required = "required" placeholder="Digite aqui o seu email..." id="campo_email" onfocus="clicou_campo_email()" onblur="nao_clicou_campo_email()" class="form-control"><br>
    <label class="form-label">Mensagem:</label>
    <textarea type="text" required = "required" style="height: 150px;" placeholder="Digite aqui sua mensagem..." id="campo_msg" onfocus="clicou_campo_msg()" onblur="nao_clicou_campo_msg()" class="form-control"></textarea>
  </div>
  <div class="col-12">
  <br><center><button type="submit" id="bttn_enviar" class="btn btn-primary">Enviar</button></center><br><br>
  </div>
</form>

<script>
  function clicou_campo_nome() {
    document.getElementById("campo_nome").style.border = "#0069b3 solid 2px";
  }
  function nao_clicou_campo_nome() {
    document.getElementById("campo_nome").style.border = "#5c5c5c solid 1px";
  }
  function clicou_campo_email() {
    document.getElementById("campo_email").style.border = "#0069b3 solid 2px";
  }
  function nao_clicou_campo_email() {
    document.getElementById("campo_email").style.border = "#5c5c5c solid 1px";
  }
  function clicou_campo_msg() {
    document.getElementById("campo_msg").style.border = "#0069b3 solid 2px";
  }
  function nao_clicou_campo_msg() {
    document.getElementById("campo_msg").style.border = "#5c5c5c solid 1px";
  }
</script>