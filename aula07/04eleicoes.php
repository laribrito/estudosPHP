<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type = "text/css" href = "css/estilo.css"/>
</head>
<body>
<div>
	<?php
		$nasc = $_GET["a"];
		$idade = 2020 - $nasc;
		echo "Você tem $idade anos.<br>";
		echo "Logo, seu voto é ". ($idade < 65 && $idade >=18? "obrigatório": "não obrigatório");
	?>
</div>
</body>
</html>
