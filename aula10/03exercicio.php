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
		$estado = isset($_POST["estado"])? $_POST["estado"]:0;
		switch($estado){
			case 1:
			case 3:
			case 4:
			case 14:
			case 22:
			case 23:
			case 27:	
				$regiao = "NORTE";
				break;
			case 2:
			case 5:
			case 6:
			case 10:
			case 15:
			case 17:
			case 18:
			case 20:
			case 26:
				$regiao = "NORDESTE";
				break;
			case 7:
			case 9:
			case 11:
			case 12:
				$regiao = "CENTRO-OESTE";
				break;
			case 8:
			case 13:
			case 19:
			case 25:
				$regiao = "SUDESTE";
				break;
			case 16:
			case 21:
			case 24:
				$regiao ="SUL";
		}
		echo "Você mora na região $regiao";
	?>
	<br/>
	<br/>
	<a class="btn btn-light" href="03exercicio.html">Voltar</a>
</div>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
