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
		/* printf() - herança do C */
		$prod = "Leite";
		$preco = 4.5;
		echo "O $prod custa R$ $preco";
		echo "<br>";
		echo "O $prod custa R$ ". number_format($preco, 2, ",", ".");
		echo "<br>";
		printf ("O %s custa %.2f", $prod, $preco)
		/* prinf aceita:
		%d - números decimais positivos ou negativos
		%u - números decimais positivos
		%f - números reais
		$s - string
		e ainda existem outros
		*/
	?>
</body>
</html>
