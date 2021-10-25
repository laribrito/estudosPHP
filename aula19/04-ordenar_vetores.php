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
		$v=array(1,12,4,6,3,7);
		print_r($v);
		sort($v);
		print_r($v);
		rsort($v);
		print_r($v);
		asort($v);
		print_r($v);
	?>
	</pre>
</body>
</html>
