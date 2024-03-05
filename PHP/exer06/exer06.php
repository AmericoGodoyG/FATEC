<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <title>Calcular média</title>
    <fieldset>
        <legend>06 - Lista</legend>

        <form action="#" method="GET">

            <label for="notaP1">Insira a nota da P1:</label>
            <input type="text" name="notaP1"> <br><br>

            <label for="notaP2">Insira a nota da P2:</label>
            <input type="text" name="notaP2"> <br><br>

            <label for="notaTrab">Insira a nota do tralho:</label>
            <input type="text" name="notaTrab"> <br><br>

            <input type="submit" value="Calcular">

        </form>
    </fieldset>
    
</body>
</html>

<?php
    if($_GET) {
        // ok
        $notaP1 = $_GET["notaP1"];
        $notaP2 = $_GET["notaP2"];
        $notaTrab = $_GET["notaTrab"];

        $media = 0;

        $media = ($notaP1 + $notaP2 + $notaTrab) / 3;
    
        if ($media >= 6) {
            echo "Aprovado!";

        } elseif ($media >= 3 && $media < 6) {
            echo "Exame.";

        } else {
            echo "Reprovado.";

        }
    }
?>