<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <title>Document</title>
    <fieldset>
        <legend>03 - Verifica o maior numero</legend>

        <form action="#" method="GET">

            <label for="valorCusto">Insira o primeiro numero:</label>
            <input type="text" name="num1"> <br><br>

            <label for="valorCusto">Insira o segundo numero:</label>
            <input type="text" name="num2"> <br><br>

            <label for="valorCusto">Insira o terceiro numero:</label>
            <input type="text" name="num3"> <br><br>

            <label for="valorCusto">Insira o quarto numero:</label>
            <input type="text" name="num4"> <br><br>
       

            <input type="submit" value="Verificar">

        </form>
    </fieldset>
</body>
</html>

<?php
    if($_GET) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];
        $num4 = $_GET["num4"];
        $maiorNum = $num1;
        $menorNum = $num1;

        //Maiores
        if($num2 > $maiorNum)
        {
            $maiorNum = $num2;                    
        }      

        if($num3 > $maiorNum)
        {
            $maiorNum = $num3;            
        }
        
        if($num4 > $maiorNum)
        {
            $maiorNum = $num4;
        }
        
        //Menores
        if($num2 < $num1)
        {
            $menorNum = $num2;
        }    
        
        if($num3 < $menorNum)
        {
            $menorNum = $num3;
        }   
        
        if($num4 < $menorNum)
        {
            $menorNum = $num4;
        }   

        echo "O maior numero digitado foi o $maiorNum <br>";
        echo "O menor numero digitado foi o $menorNum";
    }
?>