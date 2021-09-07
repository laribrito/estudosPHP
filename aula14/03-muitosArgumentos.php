<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title></title>
</head>
<body>
	<?php
		function soma(){
			$p = func_get_args(); #vetor
			$total = func_num_args(); #número de argumentos
			$somador = 0;
			for ($i=0;$i<$total;$i++){
				$somador += $p[$i];
			}
			return $somador;
		}
		$res = soma(1,3,4,8,9,2,1,4,7);
		echo "A soma dos valores é igual a $res";
	?>
</body>
</html>
