<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title></title>
</head>
<body>
	
<div id="quadro" class="container d-flex justify-content-center">
	<div>
	<?php
		$nasc = isset($_GET["anoNasc"]) ? $_GET["anoNasc"] : "[Não informado]";
		$nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
		$sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Não informado]";
		$idade = date("Y") - $nasc;
		echo "$nome,<br>";
		echo "você nasceu em $nasc, tem $idade anos e se indentifica como $sexo.";
	?>
	</div>
	<div>
	<br><br>
	<p class="d-flex justify-content-end">
		<a class="btn btn-light" href="exercicio2.html" id="btnVoltar">Voltar</a>
	</p>
	</div>
</div>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>
