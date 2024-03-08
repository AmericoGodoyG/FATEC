<form  action="#" method="POST">
    <input type="text" name="palavra" placeholder="Digite uma palávra">
    <button type="submit">Verificar Palíndromo</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        $palavra = $_POST['palavra'];

        if (strrev($palavra) == $palavra){
            echo "A palavra $palavra é um palíndromo";
        } else {
            echo "A palavra $palavra não é um palíndromo";
        }
        
    }
?>