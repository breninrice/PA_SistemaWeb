<?php include_once("../view/header.php");?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Serviços</title> 
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
  </head>
  <body>    

    <div class="container conteiner-servicos">			
			
		<h1>Serviços</h1>
			<div class="row">
				
					<button type="button" class="btn btn-default btn-lg">
						
						<span class="glyphicon glyphicon-credit-card"  aria-hidden="true">
							<a href="pagamentos.php">Pagamentos</a>					
						</span>

					</button>
					<button type="button" class="btn btn-default btn-lg">

						<span class="glyphicon glyphicon-pencil" aria-hidden="true">
							<a href="orcamento.php">Orçamentos</a>					
						</span>

					</button>				
					<button type="button" class="btn btn-default btn-lg">
						
						<span class="glyphicon glyphicon-home" aria-hidden="true">
							<a href="lajes.php">Lajes</a>					
						</span>

					</button>
					<button type="button" class="btn btn-default btn-lg">
						
						<span class="glyphicon glyphicon-list" aria-hidden="true">
							<a href="faltas.php">Faltas</a>					
						</span>

					</button>
					<button type="button" class="btn btn-default btn-lg">
						
						<span class="glyphicon glyphicon-road" aria-hidden="true">
							<a href="entregas.php">Entregas</a>					
						</span>

					</button>
					<button type="button" class="btn btn-default btn-lg">
						
						<span class="glyphicon glyphicon-usd" aria-hidden="true">
							<a href="crediario.php">Crediario</a>					
						</span>

					</button>
					<button type="button" class="btn btn-default btn-lg">
						
						<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
							<a href="compras.php">Compras</a>					
						</span>

					</button>
					<button type="button" class="btn btn-default btn-lg">
						
						<span class="glyphicon glyphicon-alert" aria-hidden="true">
							<a href="avisos.php">Avisos</a>					
						</span>

					</button>
				
			</div>

		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php include_once("../view/footer.php");?>