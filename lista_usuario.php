<?php
require_once("valida_session.php");
require_once("cabecalho.php");
require_once("menu.php");

?>
<div class="container" style="width: 100%;">
        <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Usuários</h3>
                        <div class="pull-right">
                            <span class="clickable filter" data-toggle="tooltip" title="Pesquisar Atividades" data-container="body">
                                <i class="glyphicon glyphicon-filter"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Pesquisar" />
                    </div>
                    <table class="table table-hover" id="dev-table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Email</th>
                                <th>Alterar</th>
                                <th>Remover</th>
                                
                            </tr>
                        </thead>
                        <?php
                            require_once ("bd/bd_usuario.php");
                            $usuarios = listaUsuarios();
                            foreach($usuarios as $dados) :
                        ?>
                        <tbody>
                        <tr>
                            <td><?= $dados['nome'] ?></td>
                            <td><?= $dados['usuario'] ?></td>
                            <td><?= $dados['email'] ?></td>
                            <td>
								<form action="altera_usuario.php" method="post">
                                    <input type="hidden" name="codigo" value="<?=$dados['codigo']?>" />
                                    <button class="btn btn-primary">alterar</button>
                                </form>
							</td>
                            <td>
                                <form action="confirma_remocao_usuario.php" method="post">
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

<?php
require_once("rodape.php");
?>