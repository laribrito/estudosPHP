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
		/* str_pad() - aumenta o tamanho de uma variável */
		$nome = "Guanabara";
		$novo = str_pad($nome, 30, "~");
		echo $novo;
		echo "<br>";
		$novo = str_pad($nome, 30, "~", STR_PAD_BOTH);
		echo $novo;
		echo "<br>";
		$novo = str_pad($nome, 30, "~", STR_PAD_LEFT);
		echo $novo;
	?>
</body>
</html>
