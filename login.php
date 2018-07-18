<?php
session_start();

if ((empty($_POST['usuario']) OR empty($_POST['senha']))) {
    header("Location: index.php"); 
}
else{

	$usuario = addslashes($_POST["usuario"]);
	$senha = addslashes($_POST["senha"]);

	require_once ("bd/bd_usuario.php");

	$dados = checaUsuario($usuario,$senha);

	if($dados == 0) {
	    $_SESSION['loginErro'] = "Usuário ou Senha Inválido";
	    header("Location:index.php");
	} else {
	    // Salva os dados encontrados na sessão
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha'] = $senha;
	    header("Location:principal.php");
	}
	die();
}


?>