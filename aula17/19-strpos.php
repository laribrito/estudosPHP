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
		/* strpos() - identifica a posição de uma palavra numa string maior. É case sensitive */
		$frase = "Estou aprendendo PHP";
		$pos = strpos($frase, "PHP");
		echo "a string foi encontrada na posição $pos. Segue a frase: <br>";
		echo $frase;
	?>
</body>
</html>
