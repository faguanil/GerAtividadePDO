<?php
require_once("valida_session.php");
require_once ("bd/bd_usuario.php");
require_once ("mensagens.php");
	     
	$codigo = addslashes($_POST["codigo"]);
	$nome = addslashes($_POST["nome"]);
	$senha = addslashes($_POST["senha"]);
	$email = addslashes($_POST["email"]);
	$data=date("y/m/d");

	$titulo = 'ALTERAR DADOS DO USUÁRIO';
	$link = 'lista_usuario.php';

	//se o campo senha for vazio
	if (empty($senha)){
		
		$dados = editarUsuario($codigo,$nome,$email,$data);
		if ($dados == 1){
			$texto = 'Os dados do usuário foram alterados no sistema.';
			sucesso($titulo,$texto,$link);
		}else{
			$texto = 'Os dados do usuário não foram alterados no sistema.';
			erro($titulo,$texto,$link);
		}
		
	}else{
		
		$novasenha = md5($senha);
		$dados = editarUsuariosenha($codigo,$nome,$novasenha,$email,$data);
		if ($dados == 1){
			$texto = 'Os dados do usuário foram alterados no sistema.';
			sucesso($titulo,$texto,$link);
		}else{
			$texto = 'Os dados do usuário não foram alterados no sistema.';
			erro($titulo,$texto,$link);
		}
	}

		
?>