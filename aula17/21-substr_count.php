<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title></title>
</head>
<body>
	<?php
		/* 25 FUNÇÕES AO TODO */
		/* substr_count() - Conta quantas vezes uma string aparece numa string maior */
		$frase = "Estou aprendendo PHP no curso em vídeo de PHP";
		$contador = substr_count($frase, "PHP");
		echo "PHP foi encontrado $contador vezes <br>";
		echo $frase;
	?>
</body>
</html>
