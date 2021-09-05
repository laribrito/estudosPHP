<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title>Repetição - While</title>
</head>
<body>
	<form method="get" action="exercicio02-parte2.php">
        <?php
        $x = 1;
        while ($x <= 5){
        echo "Valor $x: <input type='number' name='v$x' max='100' min='0' value='0'><br><br>";
        $x++;
        }
        ?>
        <input type="submit" value="Enviar" class="botao">
    </form>
	
</body>
</html>
