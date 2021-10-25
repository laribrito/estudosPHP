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
		$n= array(	5=> 5, 
					2=> 9,
					23=> 8,
					5=> 7 );
		$n[]=20;
		print_r($n);
		unset($n[23]);
		print_r($n);
		
	?>
	</table>
	</pre>
</body>
</html>
