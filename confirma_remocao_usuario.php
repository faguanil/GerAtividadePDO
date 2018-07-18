<?php
require_once("valida_session.php");

	$codigo = addslashes($_POST['codigo']);
	require_once ("mensagens.php");
	$titulo = 'EXCLUSÃO DE USUÁRIO';
	$texto = 'Deseja realamente excluir os dados do sistema?';
	$link = 'remove_usuario.php?codigo='.$codigo;
	$link_cancel = 'lista_usuario.php';
	confirma($titulo,$texto,$link,$link_cancel);
?>