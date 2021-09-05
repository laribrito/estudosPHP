<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" href = "css/estilo.css"/>
	<title></title>
</head>
<body>
<div>
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$tipo = $_GET["op"];
		echo "Os valores passados foram $n1 e $n2";
		$r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
		echo "<br>O resultado é $r ."
	?>
</div>
</body>
</html>
