<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title></title>
</head>
<body>
    <h3>Tabuada fácil e rápida</h3>
    <form method="post" action="exercicio04.php">
        Escolha a tabuada que deseja visualizar: 
        <select name="num">
            <?php
            $x = 1; 
            while ($x<=10){
                echo "<option value='$x'>$x</option>";
                $x++;
            }
            ?>
        </select>
        <input type="submit" value="Me dê a tabuada" class="botao">
    </form>
</body>
</html>
