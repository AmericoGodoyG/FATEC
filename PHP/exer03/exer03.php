<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <title>Verificar velocidade</title>
    <fieldset>
        <legend>03 - Lista</legend>

        <form action="#" method="GET">

            <label for="velocidade">Qual velocidade ele costuma dirigir seu carro (Km/h):</label>
            <input type="text" name="velocidade"> <br><br>

            <input type="submit" value="Verificar">

        </form>
    </fieldset>
</body>
</html>

<?php
    if($_GET) {

        $velocidade = $_GET["velocidade"];

        if ($velocidade > 150) {
            echo "Você está preste a causar um grande problema!";

        } else if ($velocidade > 120 && $velocidade <= 150) {
            echo "Você está preste a causar um problema!";

        } elseif ($velocidade > 80 && $velocidade <= 120) {
            echo "Cuidado para ultrapassar o limite de velocidade";
        
        } elseif ($velocidade > 45 && $velocidade <= 80) {
            echo "Continue assim, devagar e sempre";

        } else {
            echo "Você é uma tartaruga";

        }
    }
?>