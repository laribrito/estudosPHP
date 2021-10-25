<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title></title>
</head>
<body>
	<pre>
	<?php
		//colocar elementos no final do vetor
		$v=array(1,12,4,6,3,7);
		print_r($v);
		array_push($v, 9);
		print_r($v);
		array_pop($v);
		print_r($v);
	?>
	</pre>
</body>
</html>
