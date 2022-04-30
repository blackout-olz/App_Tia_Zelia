<?php

	session_start();

	if ($_SESSION['autenticado'] != "SIM") {
		header("Location: index.php?login=erro2");
	}

?>