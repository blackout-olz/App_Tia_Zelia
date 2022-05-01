<?php

	require_once('validador_de_acesso.php');

	$controller = true;
	$fb = null;

	$data =  date('j:F');
	$feedback = $data . '#' . $_SESSION['usuario'] . '#' . $_GET['id'] . '#' . PHP_EOL;

	$arquivoR = fopen('arquivo.hd', 'r');
	while (!feof($arquivoR)) {
		$registro = fgets($arquivoR);

		$registro_array = explode('#', $registro);
		if ($registro_array[0] == $data AND $registro_array[1] == $_SESSION['usuario']) {
			$controller = false;
			$fb = $registro_array[2];
		}

	}

?>