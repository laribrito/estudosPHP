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
		/* wordwrap() -  */
		$t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função de tratamento de string: wordwarp()";
		$res = wordwrap($t,5, "<br>");
		echo $res;
		/* wordwrap(variável, quantidade de caracteres, "END = " do Python, True para que ele quebre também as palavras) */
	?>
</body>
</html>
