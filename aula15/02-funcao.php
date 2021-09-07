<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title></title>
</head>
<body>
	<?php
		require "funcoes2.php"; #include vs require / facultativo e obrigatório
		#outras variações: include_once e require_once / "se eu já carreguei, não carregue de novo. 
		#	Se eu não carreguei, carregue pela primeira vez."
		echo "<h1>Testando novas funções</h1>";
		ola();
		mostraValor(4);
		echo "<h2>Finalizando programa</h2>";
	?>
</body>
</html>
