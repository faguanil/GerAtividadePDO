<?php
require_once("valida_session.php");

$nome = addslashes($_POST["nome"]);
$usuario = addslashes($_POST["usu"]);
//feito abaixo devido a segurança da senha crio uma sequencia e concateno com a senha acessar site MD5 Decrypter
$senha = addslashes(md5("abcxyz132013@$%?".$_POST["senha"]));
$email = addslashes($_POST["email"]);
$data=date("y/m/d");

require_once ("bd/bd_usuario.php");
$dados = buscaUsuario($usuario);

require_once ("mensagens.php");
$titulo = 'CADASTRO DE USUÁRIO';
$link = 'cad_usuario.php';

if($dados != 0){
	$_SESSION['nome'] = $nome;
	$_SESSION['usu'] = $usuario;
	$_SESSION['email'] = $email;
	$texto = 'Este nome de usuário já existe cadastrado no sistema, por favor cadastre outro nome.';
	erro($titulo,$texto,$link);
}else{
	$dados = cadastraUsuario($nome,$usuario,$senha,$email,$data);
	if($dados == 1){
		unset ($_SESSION['nome']);
		unset ($_SESSION['usu']);
		unset ($_SESSION['email']);
		$texto = 'Os dados foram cadastrados no sistema.';
		sucesso($titulo,$texto,$link);
	}else{
		$texto = 'Os dados não foram cadastrados no sistema.';
		erro($titulo,$texto,$link);
	}
	
}

?>