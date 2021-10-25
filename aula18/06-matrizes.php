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
		//vetores dentro de vetores
		$m = array(
				array(3,4),
				array(2,7),
				array(8,1)
		);
		print_r($m);
		$m[0][1] = $m[2][0];
		print_r($m);
	?>
	</pre>
</body>
</html>
