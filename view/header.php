<!DOCTYPE html>
<html lang="pt-br">
<html ng-app="shop">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width:device-width, initial-scale=1">
		<title>Deposito Costumar</title>
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="../css/orlando.css">
		<link rel="stylesheet" href="../css/orlando-mobile.css">

		<script src="..lib/angularjs/angular.min.js"></script>

	</head>
	<body>

		<header>
			
			<div id="menu-mobile-mask" class="visible-xs"></div>

			<div id="menu-mobile" class="visible-xs">
				
				<ul class="list-unstyled">
					<li><a href="quemsomos.php">QUEM SOMOS</a></li>
					<li><a href="../servico/servico.php">SERVIÇOS</a></li>
					<li><a href="produtos.php">PRODUTOS</a></li>
					<li><a href="clientes.php">CLIENTES</a></li>
					<li><a href="fornecedores.php">FORNECEDORES</a></li>
					<li><a href="relatorios.php">RELATÓRIOS</a></li>

					
				</ul>

				<div class="bar-close">
					<button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
				</div>

			</div>
			
			
				
			<div class="container" style="float:left; margin-top:10px ; margin-left:145px; color:#FFFFFF" >
				<img id="logotipo" style="box-shadow:1px 1px 5px 5px #FFF,-1px -1px 5px 5px #FFF ; color:#FFFFFF" src="../img/deposito.jpg" alt="Logotipo">
			</div>

			

			<div class="container">
				
				<div class="row">
					
					<nav id="menu"  >
						<ul style="float:right; margin-top:-15px; margin-right:70px">
							<li class="search" >
								<div  class="input-group">
							      <input type="search" placeholder="search" id="input-search">
							      <span class="input-group-btn">
							        <button type="button"><i class="fa fa-search"></i></button>
							      </span>
							    </div><!-- /input-group -->
							</li>
						</ul>
						<ul style="float:right; margin-top:35px; margin-right:70px">
							<!--Cabeçalho Menu-->
							<!--<li><a href="quemsomos.php">QUEM SOMOS</a></li>-->
							<button type="button" class="btn btn-default btn-sm" style="background-color:#001b42; border-color: #001b42" >
								
									<a href="quemsomos.php" style="color:#FFFFFF" >
									<span class="glyphicon glyphicon-home" style="color:#FFFFFF ; background-color:#001b42; " aria-hidden="true"></span>
									&nbsp;&nbsp;Quem somos</a>				
								
							</button>
							<button type="button" class="btn btn-default btn-sm" style="background-color:#001b42; border-color: #001b42" >
								
									<a href="../servicos/servicos.php" style="color:#FFFFFF">
									<span class="glyphicon glyphicon-cog" style="color:#FFFFFF ; background-color:#001b42" aria-hidden="true"></span>
									&nbsp;&nbsp;Serviços</a>
													
								 
							</button>
							<button type="button" class="btn btn-default btn-sm" style="background-color:#001b42; border-color: #001b42" >
								
									<a href="produtos.php" style="color:#FFFFFF">
									<span class="glyphicon glyphicon-tags" style="color:#FFFFFF ; background-color:#001b42" aria-hidden="true"></span>
									&nbsp;&nbsp;Produtos</a>				
								
							</button>
							<button type="button" class="btn btn-default btn-sm" style="background-color:#001b42; border-color: #001b42" >
								
									<a href="clientes.php" style="color:#FFFFFF">
									<span class="glyphicon glyphicon-user" style="color:#FFFFFF ; background-color:#001b42" aria-hidden="true"></span>
									&nbsp;&nbsp;Clientes</a>				
								
							</button>
							<button type="button" class="btn btn-default btn-sm" style="background-color:#001b42; border-color: #001b42" >
								
									<a href="fornecedores.php" style="color:#FFFFFF">
									<span class="glyphicon glyphicon-retweet" style="color:#FFFFFF ; background-color:#001b42" aria-hidden="true"></span>
									&nbsp;&nbsp;Fornecedores</a>
								
							</button>
							<button type="button" class="btn btn-default btn-sm" style="background-color:#001b42; border-color: #001b42"  >
								
									<a href="relatorios.php" style="color:#FFFFFF">
									<span class="glyphicon glyphicon-folder-open" style="color:#FFFFFF ; background-color:#001b42" aria-hidden="true"></span>
									&nbsp;&nbsp;Relatórios</a>			
								
							</button>

						</ul>
					</nav>

				</div>

			</div>			

		</header>
