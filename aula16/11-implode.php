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
		/* implode() - transforma um vetor em uma string */
		/* join() funciona da mesma maneira */
		$v[2]="Olá";
		$v[1]="Mundo";
		$v[3]="Larissa";
		$v[0]="PHP";
		$texto = join("%",$v);
		echo ($texto);
		/* OBSERVAÇÃO IMPORTANTE - nesse estilo de declaração de vetor
			o índice não é relevante para a ordem, e sim a ordem de 
			declaração */
	?>
</body>
</html>
