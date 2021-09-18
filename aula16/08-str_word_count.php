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
		/* str_word_count() - conta as palavras de uma string */
		$frase = "Eu vou estudar PHP";
		$count = str_word_count($frase,2);
		print_r ($count);
		/* segundo parâmetro pode receber os seguintes valores:
		0 - para contar as palavras
		1 - para guardar cada palavra em um array
		2 - para guardar as palavras em um array que armazena também a sua posição na string */
	?>
</body>
</html>
