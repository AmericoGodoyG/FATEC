<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <title>Calcula preço de vendas</title>
    <fieldset>
        <legend>05 - Lista</legend>

        <form action="#" method="GET">

            <label for="tipoProduto">Insira o tipo do produto (A, B,C,D):</label>
            <input type="text" name="tipoProduto"> <br><br>

            <label for="valorCusto">Insira o valor do custo do produto:</label>
            <input type="text" name="valorCusto"> <br><br>

            <input type="submit" value="Calcular">

        </form>
    </fieldset>
</body>
</html>

<?php
    if($_GET) {
        
        $valorCusto = 0;
        $tipoProduto = $_GET["tipoProduto"];
        $valorCusto = $_GET["valorCusto"];  

        switch ($tipoProduto) {
            case 'A': // OK
                $valorVenda = $valorCusto + ($valorCusto * 0.65);
                echo "Valor de venda: R$ $valorVenda :";
                break;

            case 'B' : // OK
                $valorVenda = $valorCusto + ($valorCusto * 0.75);
                echo "Valor de venda: R$ $valorVenda :";
                break;

            case 'C': // OK
                $valorVenda = $valorCusto + ($valorCusto * 0.80);
                echo "Valor de venda: R$ $valorVenda :";
                break;

            case 'D': // OK
                $valorVenda = $valorCusto + ($valorCusto * 0.85);
                echo "Valor de venda: R$ $valorVenda :";
                break;
            
            default: // OK
                echo "Insira um valor válido!";
                break;
        }
    }
?>