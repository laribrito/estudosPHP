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
		/* str_replace() - troca a ocorrência de uma string por outra. É case sensitive */
		$frase = "Eu gosto de estudar matemática";
		$novo = str_replace("matemática", "PHP", $frase);
		echo $novo;
		echo "<br>";
		$novo = str_ireplace("Matemática", "PHP", $frase);
		echo $novo;
		
	?>
</body>
</html>
