<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title></title>
</head>
<div>
<body>
	<?php
		$n = isset($_POST["nmr"])? $_POST["nmr"] : 0;
		$op = $_POST["op"];
		
		switch ($op){
			case 1:
				$r = $n * 2;
				break;
			
			case 2:
				$r=$n**3;
				break;
				
			case 3:
				$r=sqrt($n);
		}
		
		echo "O resultado foi <b>$r</b><br/>";
	?>
	<a class="btn btn-light" href="01exercicio.html">Voltar</a>
</div>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



</body>
</html>
