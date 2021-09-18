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
		/* stripos() - identifica a posição de uma palavra numa string maior. Não é case sensitive */
		$frase = "Estou aprendendo PHP";
		$pos = stripos($frase, "php");
		echo "a string foi encontrada na posição $pos. Segue a frase: <br>";
		echo $frase;
	?>
</body>
</html>
