<?php
	
	session_start();
	
	$usuarios = array(
		array('usuario' => '1adm', 'senha' => 123),
		array('usuario' => '2adm', 'senha' => 123), 
		array('usuario' => '3adm', 'senha' => 123), 
		array('usuario' => '1quim', 'senha' => 123), 
		array('usuario' => '2quim', 'senha' => 123), 
		array('usuario' => '3quim', 'senha' => 123), 
		array('usuario' => '1ds', 'senha' => 123),
		array('usuario' => '2ds', 'senha' => 123),
		array('usuario' => '3ds', 'senha' => 123)  
	);

	$usuario_autenticado = 'NÃO';


	for ($i = 0; $i < count($usuarios); $i++) {
		if ($_GET['usuario'] == $usuarios[$i]['usuario'] AND $_GET['senha'] == $usuarios[$i]['senha']) {
			$usuario_autenticado = 'SIM';
			$_SESSION['usuario'] = $usuarios[$i]['usuario'];
		}
	}


	if ($usuario_autenticado == 'SIM') {
		header('Location: home.php');
		$_SESSION['autenticado'] = 'SIM';
	} else {
		header('Location: index.php?login=erro');
		$_SESSION['autenticado'] = 'NÃO';
	}

?>