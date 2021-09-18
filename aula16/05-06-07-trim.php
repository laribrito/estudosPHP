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
		/* trim() - exclui espaços em branco no início e/ou final da string */
		$nome = "   Larissa   ";
		echo ($nome);
		echo (strlen($nome));
		echo "<br>";
		echo ($nome);
		$nome = trim($nome);
		echo (strlen($nome));
		/* ltrim() - para left
			rtrim() - para right */
	?>
</body>
</html>
