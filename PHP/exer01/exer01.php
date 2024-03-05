
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - Calcular resto salário</title>
</head>
<body>
    
    <fieldset>
        <legend>01 - Calcular resto salário </legend>

        <form action="#" method="GET">

            <label for="">Salário R$:</label>
            <input type="text" name="salario"> <br><br>

            <label for="contaUm">Valor 1ª conta em R$: </label>
            <input type="text" name="contaUm"> <br> <br>
            
            <label for="contaDois">Valor 2ª conta em R$: </label>
            <input type="text" name="contaDois"> <br> <br>

            <input type="submit" value="Envar">

        </form>
    </fieldset>
    
</body>
</html>

<?php
    if($_GET) {

        $multa = ($_GET["contaUm"] + $_GET["contaDois"]) * 0.02;
        $total = ($_GET["contaUm"] + $_GET["contaDois"]) + $multa;
        $saldo = $_GET["salario"] - $total;

        echo "<br>";

        echo "Total com juros: $total <br>";
        echo "Total da multa: $multa <br>";
        echo "Restante do salário: $saldo";
    }
?>