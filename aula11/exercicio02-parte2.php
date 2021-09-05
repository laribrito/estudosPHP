<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title>Repetição - While</title>
</head>
<body>
    <?php
        $x = 1;
        while ($x <= 5){
            $url = "v".$x;
            $$url = isset($_GET[$url])? $_GET[$url]:0;
            $x++;
        }

        $x = 1;
        while ($x <= 5){
            $v = "v".$x;
            echo "Valor $x: ". $$v ."<br><br>";
            $x++;
        }
    ?>
    <a href="exercicio02.php" style="background-color: white; color: black; padding: 5px; margin: 20px">Voltar</a>
</body>
</html>
