<?php
  require_once("valida_session.php");
  require_once("cabecalho.php");
  require_once("menu.php");
  require_once ("bd/bd_atividade.php");

  $codigo = $_POST['codigo'];
  $dados = buscaAtividadeditar($codigo);
  $nome = $dados["nome"];
  $descricao = $dados["descricao"];
  $prazo = $dados["prazo"];
  $prioridade = $dados["prioridade"];
  $concluida = $dados["concluida"]; 
  //pegando o status
    if($concluida == 1){
      $sitatividade = 'Sim'; 
            
    }
    else{
      $sitatividade = 'Não';
    }

    // convertendo a data de pagamento
    $prazo = date('d/m/Y',strtotime($dados["prazo"]));
?>
<div class="container" style="width: 100%;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Cadastrar Atividades</h3>
            </div>
            <form id="form" class="form-signin" action="altera_atividade_envia.php" method="post">
                <div class="form-group">
                  <label for="tarefa">Tarefa:</label>
                  <input type="text" class="form-control" id="nome" name="nome" value="<?=$nome;?>" required autofocus>
                  <input name="codigo" type="hidden" id="codigo" value="<?=$codigo;?>">
                </div>
                <div class="form-group">
                  <label for="descricao">Descrição:</label>
                  <textarea class="form-control" id="descricao" rows="5" name="descricao" required><?=$descricao;?></textarea>
                </div>
                <div class="form-group">
                  <label for="prazo">Prazo:</label>
                  <input type="text" class="form-control" id="prazo" name="prazo"  value="<?=$prazo;?>"required placeholder="00/00/0000">
                </div>
                <div class="form-group">
                  <label for="prioridade">Prioridade:</label>
                  <div class="radio">
                    <label><input type="radio" name="prioridade" value="1" <?php echo ($prioridade == 1) ? "checked" : null; ?>>Baixa</label>
                    <label><input type="radio" name="prioridade" value="2" <?php echo ($prioridade == 2) ? "checked" : null; ?>>Média</label>
                    <label><input type="radio" name="prioridade" value="3" <?php echo ($prioridade == 3) ? "checked" : null; ?>>Alta</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="concluida">Concluída:</label>
                  <select name="concluida" id="concluida" class="form-control" required="required">
                  <option value="<?=$concluida;?>"><?=$sitatividade;?></option>
                    <option value=""> </option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary active">Alterar</button>
                <a href="lista_atividade.php" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
</div>
<?php
require_once("rodape.php");
?>
<!-- script utilizado para validar campo senha e confirma senha se são iguais-->
<script type="text/javascript">

$(document).ready(function(){
      $('#prazo').mask('00/00/0000');
})

</script>