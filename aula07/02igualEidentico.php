<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type = "text/css" href = "css/estilo.css"/>
</head>
<body>
<div>
	<?php
		$a = 3;
		$b = "3";
		$r = ($a == $b) ? "Sim" : "Não";
		echo "as variáveis A e B são iguais? $r <br>";
		$r = ($a === $b) ? "Sim" : "Não";
		echo "as variáveis A e B são idênticos? $r";
	?>
</div>
</body>
</html>
