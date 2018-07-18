<?php
require_once("valida_session.php");
require_once("cabecalho.php");
require_once("menu.php");

?>
<div class="container" style="width: 100%;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Cadastrar Usuários</h3>
            </div>
            <form id="form" class="form-signin" action="cad_usuario_envia.php" method="post">
                <div class="form-group">
                  <label for="nome">Nome:</label>
                  <input type="text" class="form-control" id="nome" name="nome" value="<?php if(isset($_SESSION['nome'])) { echo $_SESSION['nome']; } ?>" required autofocus>
                </div>
                <div class="form-group">
                  <label for="usuario">Usuário:</label>
                  <input type="text" class="form-control" id="usu" name="usu" value="<?php if(isset($_SESSION['usu'])) { echo $_SESSION['usu']; } ?>" required>
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
                  <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; } ?>"required>
                </div>
                <button type="submit" class="btn btn-primary active">Cadastrar</button>
                <a href="principal.php" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
</div>
<?php
require_once("rodape.php");
?>
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