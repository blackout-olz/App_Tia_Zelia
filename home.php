<?php require_once("validador_de_acesso.php"); ?>

<?php

	if (isset($_GET['id'])) {
		$_SESSION['feedbackId'] = $_GET['id'];
	}

?>

<html>
	
	<head>

		<title>Tia Zélia</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Customized CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<!-- Font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="css/all.min.css">

	</head>

	<body>	
			
		<header>
			<nav class="navbar navbar-dark">
				<div class="container">
					<a href="#" class="logo">
						<img src="imagens/icone.png" width="115">
						Tia Zélia
					</a>
					<a href="logoff.php" class="logoff">Encerrar sessão</a>
				</div>
			</nav>
		</header>

		<!-- Reconstrução -->
		<div class="container d-flex flex-column flex-md-row mt-5">
			<div class="col-md-6 d-flex flex-column">
				<div>
					<h1>Cardápio do dia</h1>
				    <table class="table">
				        <thead>
				          <tr>
				            <th>Hoje teremos:</th>
				          </tr>
				        </thead>

				        <tbody>
				          <tr>
				            <td>Arroz</td>
				          </tr>

				          <tr>
				            <td>Feijão</td>
				          </tr>

				          <tr>
				            <td>Mistura</td>
				          </tr>

				          <tr>
				            <td>Sobremesa</td>
				          </tr>
				        </tbody>
				    </table>
				</div>

				<div class="mt-5">
					<div class="d-flex flex-column align-items-center">
				        <h3>Quantas pessoas da sua sala irão almoçar?</h3>
				        <form action="confirma_almoco.php" method="post" class="form-group d-flex flex-column">
				        	<input type="text" class="form-control" name="qtd_pessoas">
				        	<div class="botao-dentro mt-2">
					          <button class="btn btn-padrao text-light btn-lg">Enviar</button>
					        </div>
				        </form>
				        
				    </div>
				</div>
			</div>

			<div class="col-md-6 d-flex flex-column mt-5 mt-md-0">
				<div class="d-flex justify-content-center">
			      	<div class="card form-control ms-md-5">
					  <div class="card-body">
					    <h5 class="card-title">Cardápio semanal</h5>
					    <h6 class="card-subtitle mb-2 text-muted">Visualize o cardápio da semana</h6>
					    <a href="#" class="btn btn-padrao py-2 text-light form-control">
					    	<i class="fa-solid fa-utensils cardapio-semanal"></i>
					    </a>
					  </div>
					</div>
			    </div>

			    <div class="mt-md-5 pt-md-5">
			    	<div class="d-flex flex-column align-items-center pt-md-4 mt-5">
				        <h3>Deixe seu feedback</h3>
				        <div class="d-flex">
				        	<div id="f1" class="px-1 feedback">
				        	<i class="fa-regular fa-face-frown feedback-icon"></i>
				        	</div>
				        	<div id="f2" class="px-1 feedback">
					        	<i class="fa-regular fa-face-frown-open feedback-icon"></i>
					        </div>
					        <div id="f3" class="px-1 feedback">
					          	<i class="fa-regular fa-face-meh feedback-icon"></i>
					        </div>
					        <div id="f4" class="px-1 feedback">
					          	<i class="fa-regular fa-face-smile feedback-icon"></i>
					        </div>
					        <div id="f5" class="px-1 feedback">
					          	<i class="fa-regular fa-face-grin-stars feedback-icon"></i>
					        </div>
				        </div>
				    </div>
			    </div>
			</div>
		</div>

		<!-- Bootstrap Bundle with Popper Javascript -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    	<!-- Javascript -->
    	<script src="js/feedbackConfig.js"></script>

    	<!-- Font Awesome Javascript -->
    	<script src="js/all.min.js"></script>

	</body>

</html>