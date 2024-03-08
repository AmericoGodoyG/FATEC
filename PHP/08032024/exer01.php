
<form actio ="#" method="POST">
    <input type="text" name="num1" placeholder="Número 1 ">
    <input type="text" name="num2" placeholder="Número 2 ">
    <input type="submit" name="Enviar" value="Enviar">
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"]="POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $soma = $num1 + $num2;
        echo "A soma de $num1 e $num2 é: $soma";   
    }
   
?>