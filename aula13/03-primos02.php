<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title></title>
</head>
<body>
	<?php
		$num = isset($_POST["num"])? $_POST["num"]:1;
		$y = 0;
		for ($x=$num;$x>=1;$x--){
			if ($num % $x ==0){
				$multiplos=$multiplos."$x ";
				$y++;
			}
		}
		echo "<h1>Análise do número $num</h1>";
		echo "<p>Valores múltiplos: $multiplos</p>";
		echo "<p>Total de múltiplos: $y</p>";
		echo "<p>Resultado: $num ";
		$resultado = $y == 2? "<span style='color: green;'>É PRIMO</span>":"<span style='color: RED;'>NÃO É PRIMO</span>";
		echo "$resultado</p>";
	?>
	<a href="03-primos01.html">Voltar</a>
</body>
</html>
