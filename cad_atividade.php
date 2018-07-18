<?php
require_once("valida_session.php");
require_once("cabecalho.php");
require_once("menu.php");

?>
<div class="container" style="width: 100%;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Cadastrar Atividades</h3>
            </div>
            <form id="form" class="form-signin" action="cad_atividade_envia.php" method="post">
                <div class="form-group">
                  <label for="tarefa">Tarefa:</label>
                  <input type="text" class="form-control" id="nome" name="nome" required autofocus>
                </div>
                <div class="form-group">
                  <label for="descricao">Descrição:</label>
                  <textarea class="form-control" id="descricao" rows="5" name="descricao" required></textarea>
                </div>
                <div class="form-group">
                  <label for="prazo">Prazo:</label>
                  <input type="text" class="form-control" id="prazo" name="prazo" required placeholder="00/00/0000">
                </div>
                <div class="form-group">
                  <label for="prioridade">Prioridade:</label>
                  <div class="radio">
                    <label><input type="radio" name="prioridade"  value="1" checked >Baixa</label>
                    <label><input type="radio" name="prioridade"  value="2">Média</label>
                    <label><input type="radio" name="prioridade"  value="3">Alta</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="concluida">Concluída:</label>
                  <select name="concluida" id="concluida" class="form-control" required="required">
                    <option value=""> </option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                  </select>
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
<!-- script utilizado para validar campo de data-->
<script type="text/javascript">

$(document).ready(function(){
      $('#prazo').mask('00/00/0000');
})

</script>
