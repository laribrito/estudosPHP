<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title>Tabuada com o FOR</title>
</head>
<div>
<body>
	<?php
		$num = isset($_POST["num"])?$_POST["num"]:1;
		echo "<h1>Tabuada de $num</h1>";
		echo "<div style='margin-left: 40px'";
		for($x=1;$x<=10;$x++){
			echo "<p>$num x $x = ".($num*$x)."</p>";
		}
		echo "</div>";
	?>
	<a href="02-tabuada01.php">Voltar</a>
</div>
</body>
</html>
