<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title>Repetição - While</title>
</head>
<body>
    <?php
        $a = isset($_POST["inicio"])?$_POST["inicio"]:0;
        $b = isset($_POST["final"])?$_POST["final"]:0;
        $x = isset($_POST["incre"])?$_POST["incre"]:1;

        if ($a>=$b){
            while($a>=$b){
                echo "$a ";
                $a -= $x; 
            }
        } else {
            while($a<=$b){
                echo "$a ";
                $a += $x; 
            }
        }
    ?>
    <br><br>
    <a href="exercicio03.html" style="background-color: white; color: black; padding: 5px; margin: 20px">Voltar</a>
</body>
</html>
