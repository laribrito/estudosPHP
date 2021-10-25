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
		//como dicionários do Python
		$n= array("nome"=> "Ana",
					"peso" => 77.4,
					"idade" => 23);
		print_r($n);
		$n["fuma"] = true;
		foreach($n as $campo => $valor){
			echo "O valor de $campo é $valor<br>";
		}
		
	?>
	</table>
	</pre>
</body>
</html>
