<?php 
require_once("valida_session.php");
require_once ("bd/bd_usuario.php");

$codigo = $_GET['codigo'];

require_once ("mensagens.php");
$titulo = 'EXCLUSÃO DE USUÁRIO';
$link = 'lista_usuario.php';
$dados = removeUsuario($codigo);

if($dados == 0){
	$texto = 'Os dados do usuário não foram excluidos do sistema.';
	erro($titulo,$texto,$link);
}else{
	$texto = 'Os dados do usuário foram excluidos do sistema.';
	sucesso($titulo,$texto,$link);
}

?>