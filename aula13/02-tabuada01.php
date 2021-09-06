<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title>Tabuada com o FOR</title>
</head>
<body>
    <h3>Tabuada fácil e rápida</h3>
    <form method="post" action="02-tabuada02.php">
        Escolha a tabuada que deseja visualizar: 
        <select name="num">
            <?php
            for($x=1;$x<=10;$x++){
                echo "<option value='$x'>$x</option>";
            }
            ?>
        </select>
        <input type="submit" value="Me dê a tabuada" class="botao">
    </form>
</body>
</html>
