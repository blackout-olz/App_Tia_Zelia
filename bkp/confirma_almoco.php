<?php

	session_start();
	$qtd_pessoas = $_POST['qtd_pessoas'];

	if ($qtd_pessoas == '' OR $qtd_pessoas == null) {
		if (isset($_SESSION['feedbackId'])) {
			header("Location: home.php?id=" . $_SESSION['feedbackId']);
		} else {
			header("Location: home.php");
		}
	}

	//logica de confirmação de almoço
	//pretendo fazer usando $_SESSION -> envia algum parametro onde muda o campo que faria envio da quantidade de pessoas
	//fazer confirmaçao de envio usando javascript tambem

	if (isset($_SESSION['feedbackId'])) {
		header("Location: home.php?id=" . $_SESSION['feedbackId']);
	} else {
		header("Location: home.php");
	}

?>