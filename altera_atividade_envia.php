<?php
require_once("valida_session.php");
require_once ("bd/bd_atividade.php");
require_once ("mensagens.php");
	     
$codigo = $_POST['codigo'];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$prazo = explode("/",$_POST["prazo"]);
$prazo = ($prazo[2]."/".$prazo[1]."/".$prazo[0]);
$prioridade = $_POST["prioridade"];
$concluida = $_POST["concluida"];
$data=date("y/m/d");

$dados=editarAtividade($codigo,$nome,$descricao,$prazo,$prioridade,$concluida,$data);

$titulo = 'ALTERAR DADOS DA ATIVIDADE';
$link = 'lista_atividade.php';

if($dados == 0){
	$texto = 'Os dados da atividade não foram alterados no sistema.';
	erro($titulo,$texto,$link);
}else{
	$texto = 'Os dados da atividade foram alterados no sistema.';
	sucesso($titulo,$texto,$link);
}
		
?>