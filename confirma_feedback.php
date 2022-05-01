<?php

	require('consulta_feedback.php');

	if ($controller) {
	
		$arquivoW = fopen('arquivo.hd', 'a');

		fwrite($arquivoW, $feedback);

		fclose($arquivoW);

		require('consulta_feedback.php');
	}

?>

{"feedback": "<?=$fb?>"}