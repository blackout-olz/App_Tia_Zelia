<?php

	$id = str_replace('f', '', $_GET['id']);

	//tratamento com o feedback

	header('Location: home.php?id=' . $_GET['id']);

?>