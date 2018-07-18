<?php
require_once("valida_session.php");

	$codigo = addslashes($_POST['codigo']);
	require_once ("mensagens.php");
	$titulo = 'EXCLUSÃO DE ATIVIDADE';
	$texto = 'Deseja realamente excluir os dados do sistema?';
	$link = 'remove_atividade.php?codigo='.$codigo;
	$link_cancel = 'lista_atividade.php';
	confirma($titulo,$texto,$link,$link_cancel);
?>