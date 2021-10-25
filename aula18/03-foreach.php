<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title></title>
</head>
<body>
	<pre>
		<table border="1"> <tr>
	<?php
		$n= range(5,20,2);
		foreach($n as $x){
			echo "<td>$x ";
		};
		
	?>
	</table>
	</pre>
</body>
</html>
