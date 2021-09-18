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
		/* substr() - recorta uma string */
		$site = $_GET["str"] ?? "paralelepipedo"; //essa linha é uma funcionalidade que apareceu no PHP7, substituíndo
		// a necessidade do isset() e do operador ternário. O nome desse operador é: operador de coalescência. 
		$sub = substr($site, 0 , 5);
		echo $sub;
	?>
</body>
</html>
