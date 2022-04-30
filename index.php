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

		<!-- Icon -->
		<link rel="icon" href="imagens/icone.png">

	</head>

	<body>	
			
		<header>
			<nav class="navbar navbar-dark">
				<div class="container">
					<a href="#" class="logo">
						<img src="imagens/icone.png" width="115">
						Tia Zélia
					</a>
				</div>
			</nav>
		</header>

		<main>
			<div class="container d-flex justify-content-center">
				<div class="mt-5">
					<div class="card">
					  <div class="card-body px-5 py-5">
					  	<h4 class="card-title mb-3 ms-2">Login</h4>
					    <form class="form-group index-form" id="form">
					    	<div>
					    		<input type="text" placeholder="Usuário" class="px-4 form-control" name="usuario" id="usuario">
					    	</div> 
					    	<div class="mt-2">
						    	<input type="password" placeholder="Senha" class="px-4 form-control" name="senha" id="senha"> 
						    </div>

						    <?php
						    	if (isset($_GET['login'])) {
							    	if ($_GET['login'] == 'erro') {
							    		echo '<div class="text-warning ms-5 divErro">Inicie sua sessão</div>';
							    		echo '<div class="text-warning ms-3 divErro">para acessar outras páginas</div>';
							    	}
						    	}
						    ?>

						    
					    </form>
					    <button class="btn btn-padrao text-light mt-3 form-control btn-lg" onclick="validacao()">Entrar</button>
					  </div>
					</div>
				</div>
			</div>
		</main>

		


		<!-- Bootstrap Bundle with Popper Javascript -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    	<!-- Font Awesome Javascript -->
    	<script src="js/all.min.js"></script>

    	<!-- Javascript -->
    	<script src="js/validacao.js"></script>

	</body>

</html>