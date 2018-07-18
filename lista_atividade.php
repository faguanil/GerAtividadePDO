<?php
require_once("valida_session.php");
require_once("cabecalho.php");
require_once("menu.php");

?>
<div class="container" style="width: 100%;">
        <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Atividades</h3>
                        <div class="pull-right">
                            <span class="clickable filter" data-toggle="tooltip" title="Pesquisar Atividades" data-container="body">
                                <i class="glyphicon glyphicon-filter"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Pesquisar" />
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="dev-table">
                            <thead>
                                <tr>
                                    <th>Tarefa</th>
                                    <th>Descrição</th>
                                    <th>Prazo</th>
                                    <th>Prioridade</th>
                                    <th>Concluída</th>
                                    <th>Alterar</th>
                                    <th>Remover</th>
                                    
                                </tr>
                            </thead>
                                <?php
                                    require_once ("bd/bd_atividade.php");
                                    $atividades = listaAtividades();
                                    foreach($atividades as $dados) :
                                        $prazo = $dados["prazo"];
                                        $prioridade = $dados["prioridade"];
                                        $concluida = $dados["concluida"];
                                        //tratando a prioridade
                                        if($prioridade == 1){
                                            $prioridadetarefa = 'Baixa'; 
                                          
                                         }
                                        else if($prioridade == 2){
                                            $prioridadetarefa = 'Media'; 
                                          
                                         }
                                         else{
                                            $prioridadetarefa = 'Alta';
                                         }
                                          
                                         //tratando se a tarefa foi concluida
                                         if($concluida == 1){
                                             $concluidatarefa = 'Sim';
                                         }else{
                                             $concluidatarefa = 'Não';
                                         }
                                          
                                         // convertendo a data de pagamento
                                         $prazo = date('d/m/Y',strtotime($dados["prazo"]));
                                ?>
                                <tbody>
                                <tr>
                                    <td><?= $dados['nome'] ?></td>
                                    <td><?= $dados['descricao'] ?></td>
                                    <td><?= $prazo ?></td>
                                    <td><?= $prioridadetarefa ?></td>
                                    <td><?= $concluidatarefa ?></td>
                                    <td>
										<form action="altera_atividade.php" method="post">
                                            <input type="hidden" name="codigo" value="<?=$dados['codigo']?>" />
                                            <button class="btn btn-primary">alterar</button>
                                        </form>
									</td>
                                    <td>
                                        <form action="confirma_remocao_atividade.php" method="post">
                                            <input type="hidden" name="codigo" value="<?=$dados['codigo']?>" />
                                            <button class="btn btn-danger">remover</button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                             <?php
                                endforeach
                             ?>
                        </table>
                    </div>
                </div>
        </div>
</div>

<?php
require_once("rodape.php");
?>