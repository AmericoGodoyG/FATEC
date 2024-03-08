<form method="POST">
    <input type="text" name="numero" placeholder="Digite um número">
    <button type="submit">Verificar Par ou Ímpar</button>
</form>


<?php

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        
        $numero = $_POST['numero'];
        if ($numero % 2 == 0 ) {
            echo "O numero $numero é Par";
        } else {
            echo "O numero $numero é Ímpar";
        }
    }

?>