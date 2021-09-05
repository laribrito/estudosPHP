<!DOCTYPE html>
<html>
<head>
	<?php
		$txt = isset($_GET["txt"])? $_GET["txt"]:"[Texto genérico]";
		$tam = isset($_GET["tamanho"])? $_GET["tamanho"]:"12pt";	
		$cor = isset($_GET["cor"])? $_GET["cor"]:"#000000";	
	?>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title></title>
	<style>
	span.texto{
		font-size: <?php echo $tam; ?>;
		color: <?php echo $cor; ?>;
	}
	</style>
</head>
<body>
	
<div id="quadro" class="container d-flex justify-content-center">
	<?php
		echo "<span class='texto'>$txt</span>"; 
	?>
	
</div>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>
