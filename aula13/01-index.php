<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title>Contagens com o FOR</title>
</head>
<div>
<body>
	<?php
		for($x=1;$x<=10;$x++){
			echo "$x ";
		}
		echo "<br>";
		for($x=10;$x>=1;$x--){
			echo "$x ";
		}
		echo "<br>";
		for($x=0;$x<=50;$x+=5){
			echo "$x ";
		}
		echo "<br>";
		for($x=20;$x>=0;$x-=2){
			echo "$x ";
		}
	?>
</div>
</body>
</html>
