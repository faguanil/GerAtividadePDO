<?php
require_once("cabecalho.html");
?>
<h1 class="text-center login-title">CADASTRAR NOVO USUÁRIO</h1>
<form class="form-signin" action="conta_usuario_envia.php" method="post">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
      <label for="usuario">Usuário:</label>
      <input type="text" class="form-control" id="usuario" name="usuario" required>
    </div>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="senha" name="senha" required>
    </div>
    <div class="form-group">
      <label for="pwd">Confirmar Senha:</label>
      <input type="password" class="form-control" id="conf_senha" name="conf_senha"  oninput="validaSenha(this)" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email"required>
    </div>
    <button type="submit" class="btn btn-primary active">Cadastrar</button>
    <a href="index.php" class="btn btn-danger">Cancelar</a>
</form>

<!-- script utilizado para validar campo senha e confirma senha se são iguais-->

<script type="text/javascript">
function validaSenha (input){ 
    if (input.value != document.getElementById('senha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>

<?php
require_once("rodape.html");
?>