<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type = "text/css" href = "css/estilo.css"/>
</head>
<body>
<div>
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$n3 = $_GET["c"];
		
		$media = ($n1 + $n2 + $n3)/3;
		echo "A média do aluno é ". number_format($media, 2);
		echo "<br>A situação do aluno é: ". ($media >=6? "Aprovado" : "Reprovado");
	?>
</div>
</body>
</html>
