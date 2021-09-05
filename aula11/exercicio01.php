<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title>Repetição - While</title>
</head>
<body>
	<div>
	<?php
	/*
	WHILE - testa e depois executa
	*/
	$c = 1;
	while ($c<=10) {
		echo "<p>$c</p>";
		$c++;
	}
	?>
	</div>

	<div style="float: left; margin-top: -355px; margin-left: 150px;">
	<?php
		$c = 10;
		while ($c>=1) {
			echo "<p>$c</p>";
			$c--;
		}
		?>
	</div>
	
</body>
</html>
