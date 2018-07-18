<?php
require_once("valida_session.php");
	
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$prazo = explode("/",$_POST["prazo"]);
$prazo = ($prazo[2]."/".$prazo[1]."/".$prazo[0]);
$prioridade = $_POST["prioridade"];
$concluida = $_POST["concluida"];
$data=date("y/m/d");
$usuario = $_SESSION['usuario'];

require_once ("bd/bd_atividade.php");
require_once ("mensagens.php");
$titulo = 'CADASTRO DE ATIVIDADE';
$link = 'cad_atividade.php';
$dados=cadastraAtividade($nome,$descricao,$prazo,$prioridade,$concluida,$data,$usuario);

if($dados != 0){
	$texto = 'Os dados da atividade foram cadastrados no sistema.';
	sucesso($titulo,$texto,$link);
	
}else{
	$texto = 'Não foi possivel cadastrar esta atividade no sistema.';
	erro($titulo,$texto,$link);
	}
?>