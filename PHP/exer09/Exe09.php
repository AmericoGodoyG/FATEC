<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <title>Document</title>
    <fieldset>
        <legend>09 - Verificar se o numero é primo</legend>

        <form action="#" method="GET">

            <label for="numero"> Digite um numero Inteiro:</label>
            <input type="text" name="numero"> <br><br>

            <input type="submit" value="Verificar">

        </form>
    </fieldset>
</body>

</html>

<?php
if ($_GET) {

    $numero = $_GET["numero"];
    $divisores = 0;

    for ($count = 2; $count < $numero; $count++)

        if ($numero % $count == 0) {
            echo "Multiplo de $count <br>";
            $divisores++;
        }

    if ($divisores) {
        echo "Não é Primo, tem $divisores divisores além de 1 e ele mesmo <br>";
    }
    echo "O $numero é primo";
}

?>