<?php
  require_once("valida_session.php");
  require_once("cabecalho.php");
  require_once("menu.php");
  require_once ("bd/bd_usuario.php");

  $codigo = addslashes($_POST['codigo']);
  $dados = buscaUsuarioeditar($codigo);
  $nome = $dados["nome"];
  $usuario = $dados["usuario"];
  $senha = $dados["senha"];
  $email = $dados["email"];
?>
<div class="container" style="width: 100%;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Alterar Dados do Usuário</h3>
            </div>
            <form id="form" class="form-signin" action="altera_usuario_envia.php" method="post">
                <div class="form-group">
                  <label for="nome">Nome:</label>
                  <input type="text" class="form-control" id="nome" name="nome" value="<?=$nome;?>"required autofocus>
                  <input name="codigo" type="hidden" id="codigo" value="<?=$codigo;?>">
                </div>
                <div class="form-group">
                  <label for="usuario">Usuário:</label>
                  <input type="text" class="form-control" id="usuario" name="usuario" value="<?=$usuario;?>" disabled>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" value="<?=$email;?>" name="email"required>
                </div>

                 <div class="form-group">
                  <label>Deseja Motificar a Senha?</label>
                  <input id="opt-sn" checked="checked" type="radio" name="TipoSenha" onclick="tipoSenhaSel();"/> Não
                  <input id="opt-ss" type="radio" name="TipoSenha" onclick="tipoSenhaSel();"/> Sim 
                </div>
                <div id="sn">
                </div>
                <div id="ss" style="display: none;">
                  <div class="form-group">
                    <label for="pwd">Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary active">Alterar</button>
                <a href="lista_usuario.php" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
</div>
<?php
require_once("rodape.php");
?>
<!--sccript ocuta campo senha-->
<script type="text/javascript">
function tipoSenhaSel() {
  var sn = document.getElementById("opt-sn").checked;
  if (sn) {
    document.getElementById("sn").style.display = "block";
    document.getElementById("ss").style.display = "none";
  } else {
    document.getElementById("sn").style.display = "none";
    document.getElementById("ss").style.display = "block";
  }
}
</script>