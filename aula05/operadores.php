<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title></title>
</head>
<div>
<body>
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$soma = $n1 + $n2;
		echo "A soma entre $n1 e $n2 é $soma. <br/>";
		$sub = $n1 - $n2;
		echo "A subtração entre $n1 e $n2 é $sub.<br/>";
		$mul = $n1 * $n2;
		echo "A multiplicação entre $n1 e $n2 é $mul.<br/>";
		$div = $n1 / $n2;
		echo "A divisão entre $n1 e $n2 é $div.<br/>";
		$mod = $n1 % $n2;
		echo "O módulo entre $n1 e $n2 é ".($n1 % $n2).".<br/>";
		$m = ($n1 + $n2)/2;
		echo "A média entre $n1 e $n2 é $m.<br/>";
		
	?>
</div>
</body>
</html>
