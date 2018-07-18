<?php
session_start();
$email = addslashes($_POST["email"]);

require_once ("bd/bd_usuario.php");
require_once("email/PHPMailerAutoload.php");
require_once ("mensagens.php");

$dados = buscaEmail($email);
$nome = $dados[0];
$senha = $dados[1];

$mensagem = "E-mail enviado automático. <br> Seu usuário é: ". $nome . " e sua senha é: ".$senha;

if (empty($nome)){
	$titulo = 'RECUPERAR DADOS';
	$link = 'esqueci_senha.php';
	$texto = "Este e-mail não esta cadastrado no sistema.";
	erro($titulo,$texto,$link);
}else{
	$mail = new PHPMailer();

	$mail->isSMTP();  
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->SMTPOptions = [ 'ssl' => [ 'verify_peer' => false ] ];
	$mail->Username = "email do gmail";
	$mail->Password = "senha do e-mail do gmail";

	$mail->setFrom("email do gmail", "GerAtividade");
	$mail->addAddress("$email");
	$mail->isHTML(true);
	$mail->Subject = "Recuperar Usuario e Senha";
	$mail->msgHTML("<html>{$nome}, você solicitou recentemente para redefinir sua senha!<br>email: {$email}<br>mensagem: {$mensagem}</html>");
	$mail->AltBody = "{$nome}\nemail:{$email}\nMensagem: {$mensagem}";

	$titulo = 'RECUPERAR DADOS';
	$link = 'index.php';
	
	if($mail->send()) {
		$texto = "Os dados foram enviados para seu e-mail.";
		sucesso($titulo,$texto,$link);
	} else {
		$texto = "Erro ao tentar recuperar seus dados  $nome.";
		erro($titulo,$texto,$link);
	}
	die();
	
}

?>