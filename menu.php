<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
			<a class="navbar-brand">
                <img src="img/topo.png" alt="LOGO"">
            </a>

        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
                        
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $_SESSION['usuario']?> <b class="glyphicon glyphicon-menu-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Sair</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="principal.php"><i class="glyphicon glyphicon-home"></i> PÁGINA PRINCIPAL</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="glyphicon glyphicon-user"></i> USUÁRIOS <i class="glyphicon glyphicon-menu-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="cad_usuario.php"><i class="glyphicon glyphicon-plus"></i> Cadastrar</a></li>
                        <li><a href="lista_usuario.php"><i class="glyphicon glyphicon-search"></i> Consultar</a></li>
                    </ul>
                </li> 
				<li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="glyphicon glyphicon-list-alt"></i>  ATIVIDADES <i class="glyphicon glyphicon-menu-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="cad_atividade.php"><i class="glyphicon glyphicon-plus"></i> Cadastrar</a></li>
                        <li><a href="lista_atividade.php"><i class="glyphicon glyphicon-search"></i> Consultar</a></li>
                    </ul>
                </li>				
                <li>
                    <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> SAIR</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>