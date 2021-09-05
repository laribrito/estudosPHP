<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title>Faça Enquanto - While</title>
</head>
<body>
	<?php
	/*
	WHILE - testa e depois executa
	DO + WHILE - executa e depois testa
	*/
	$c = 1;
	do {
		echo "<p>$c</p>";
		$c+=1;
	} while ($c<=10);
	?>
</body>
</html>
