<?php
require_once("cabecalho.html");
?>
<h1 class="text-center login-title">RECUPERAR SENHA</h1>
<form class="form-signin" action="esqueci_senha_envia.php" method="post">
    <div class="form-group">
      Caso tenha esquecido sua senha, entre com seu e-mail e clique no botão Recuperar.
      <br/>
      <br/>
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com"required>
    </div>
    <button type="submit" class="btn btn-primary active">Recuperar</button>
    <a href="index.php" class="btn btn-danger">Cancelar</a>
</form>
<?php
require_once("rodape.html");
?>