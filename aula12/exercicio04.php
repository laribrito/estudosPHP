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
		echo "$num! = ";
		$fat = $num;
		do {
			echo "$num x ";
			$num--;
			$fat = $fat * $num;
		} while ($num >=2);
		echo "1 = $fat";
	?>
	<br><br>
    <a href="exercicio03.html" style="background-color: white; color: black; padding: 5px; margin: 20px">Voltar</a>
</div>
</body>
</html>
