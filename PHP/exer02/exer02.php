<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <title>Calcular quilowatt</title>
    <fieldset>
        <legend>02 - Lista</legend>

        <form action="#" method="GET">

            <label for="salario">Salário Mínimo R$:</label>
            <input type="text" name="salario"> <br><br>

            <label for="consumo">Quilowatt consumidos:</label>
            <input type="text" name="consumo"> <br> <br>

            <input type="submit" value="Calcular">

        </form>
    </fieldset>
</body>
</html>

<?php
    if($_GET) {

        $salaioSete = $_GET["salario"] * 0.1430; /*Um sétimo do salrio*/

        $valorKw = $salaioSete / 100; // valor em reais do Kw.

        $qtdValorConsumo = $valorKw * $_GET["consumo"]; 

        $qtdeValorDesconto = $qtdValorConsumo * 0.90;

        echo "<br>";

        echo "Valor quilowatt: R$ $valorKw <br>";
        echo "Valor total a ser pago: R$ $qtdValorConsumo <br>";
        echo "Valor com desconto (10%) a ser pago: R$ $qtdeValorDesconto";
    }
?>