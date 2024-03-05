<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <title>Calcula lucro</title>
    <fieldset>
        <legend>04 - Lista</legend>

        <form action="#" method="GET">

            <label for="valorCusto">Insira o valor do custo do produto:</label>
            <input type="text" name="valorCusto"> <br><br>

            <label for="valorVenda">Insira o valor de venda do produto:</label>
            <input type="text" name="valorVenda"> <br><br>

            <input type="submit" value="Calcular">

        </form>
    </fieldset>
</body>
</html>

<?php
    if($_GET) {

        $valorCusto = $_GET["valorCusto"];
        $valorVenda = $_GET["valorVenda"];

        $resto = $valorVenda - $valorCusto;

        $lucro = $resto * 100 / $valorCusto;

        echo "Resto: $resto <br>";
        echo "Lucro: $lucro % <br>";

        if ($lucro < 10) {
            echo "Baixo lucro";

        } else if ($lucro >= 10 && $lucro < 20) {
            echo "Lucro Médio";

        } else {
            echo "Lucro Alto";

        }  
    }
?>