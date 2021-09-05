<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title></title>
</head>
<div>
<body>
	<?php
		$num = isset($_POST["num"])? $_POST["num"]:1;
		echo "<h1>Tabuada do $num</h1>";
		echo "<div style='margin-left: 40px'>";
		$x = 1;
		while ($x<=10){
			echo "<p>$num x $x = ". ($num*$x). "</p>";
			$x++;
		}
		echo "</div>"
	?>
	<br><br>
    <a href="exercicio04-parte01.php">Voltar</a>
</div>
</body>
</html>
