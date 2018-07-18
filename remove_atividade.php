<?php 
require_once("valida_session.php");
require_once ("bd/bd_atividade.php");

$codigo = $_GET['codigo'];

require_once ("mensagens.php");
$titulo = 'EXCLUSÃO DE ATIVIDADE';
$link = 'lista_atividade.php';
$dados = removeAtividade($codigo);

if($dados == 0){
	$texto = 'Os dados não foram excluidos do sistema.';
	erro($titulo,$texto,$link);
}else{
	$texto = 'Os dados foram excluidos do sistema.';
	sucesso($titulo,$texto,$link);
}

?>