<form  action="#" method="POST">
    <input type="text" name="numero" placeholder="Digite um número">
    <button type="submit">Verificar fatorial</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        $numero = $_POST['numero'];

        $fatorial = 1;

        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i; 
        }

        echo "O fatorial de $numero é: $fatorial";

    }
?>