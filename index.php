<?php
require_once("cabecalho.html");
?>
<h1 class="text-center login-title">ACESSAR O SISTEMA</h1>
<img class="profile-img" src="img/login.png">

<?php
	session_start();
	if(isset($_SESSION['loginErro'])){
?>
		<div class="alert alert-danger alert-dismissable text-center">
			<button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
		      &times;
		   </button>
			<strong><?=$_SESSION['loginErro'];?></strong>
		</div>
		<?php
			unset($_SESSION['loginErro']);
					
	}
		?>

<form class="form-signin" action="login.php" method="post">
    <input type="text" class="form-control" name="usuario"placeholder="Usuário" required autofocus>
    <br/>
    <input type="password" class="form-control" name="senha"placeholder="Senha" required>
    <br/>
    <button type="submit" class="btn btn-lg btn-primary btn-block" >Acessar <span class="glyphicon glyphicon-log-in"></span>
    </button>
    <a href="esqueci_senha.php" class="pull-right need-help">Esqueceu sua senha ou seu usuário?</a><span class="clearfix"></span>
</form>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php
require_once("rodape.html");
?> 

            