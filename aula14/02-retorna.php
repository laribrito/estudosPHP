<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title></title>
</head>
<body>
	<?php
		function soma($a,$b){
			return $a + $b;
		}
		$x = 9;
		$y = 15;
		$res = soma($x,$y);
		echo "A soma entre $x e $y é $res";
	?>
</body>
</html>
