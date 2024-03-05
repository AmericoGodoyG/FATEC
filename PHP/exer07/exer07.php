<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <title>Verificar trângulo</title>
    
    <fieldset>
        <legend>07 - Lista</legend>
        
        <form action="#" method="GET">

            <label for="ladoUm">Insira o 1º lado do triângulo:</label>
            <input type="text" name="ladoUm"> <br><br>

            <label for="ladoDois">Insira o 2º lado do triângulo:</label>
            <input type="text" name="ladoDois"> <br><br>

            <label for="ladoTres">Insira o 3º lado do triângulo:</label>
            <input type="text" name="ladoTres"> <br><br>

            <input type="submit" value="Verificar">

        </form>
    </fieldset>

</body>
</html>

<?php
    if($_GET) {
    // ok
    $ladoUm = $_GET["ladoUm"];
    $ladoDois = $_GET["ladoDois"];
    $ladoTres = $_GET["ladoTres"];

    if ($ladoUm == $ladoDois && $ladoDois == $ladoTres) {
        echo "Trângulo Equilátero: ";
        
    } elseif ($ladoUm != $ladoDois && $ladoDois == $ladoTres) {
        echo "Trângulo Isósceles";

    } elseif ($ladoUm != $ladoDois && $ladoDois != $ladoTres) {
        echo "Triângulo Escaleno";

    }
    else {
        echo "Insira um valor válido";
    }
    }
?>