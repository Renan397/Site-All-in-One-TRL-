<div class="container">
<form method="POST" action="./Source/Database/query.php" class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Nome:</label>
    <input type="text" name="name" required="required" placeholder="Digite aqui o seu nome.." id="campo_nome" onfocus="clicou_campo_nome()" onblur="nao_clicou_campo_nome()" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Telefone ou Email:</label>
    <input type="email" name="email" required="required" placeholder="Digite aqui o seu telefone ou email..." id="campo_email" onfocus="clicou_campo_email()" onblur="nao_clicou_campo_email()" class="form-control">
  </div><br><br><br><br>
  <div class="col-md-6">
    <label class="form-label">Mensagem:</label>
    <textarea type="text" maxlength="1000" required="required" minlength="1" name="message" style="height: 150px;" placeholder="Digite aqui a sua mensagem..." id="campo_msg" onfocus="clicou_campo_msg()" onblur="nao_clicou_campo_msg()" class="form-control"></textarea>
  </div>
  <div class="col-12">
  <br><center><button type="submit" id="bttn_enviar" class="btn btn-primary">Enviar</button></center><br><br>
  </div>
</form>
</div>

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