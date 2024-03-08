<form  action="#" method="POST">
    <input type="text" name="ano" placeholder="Digite um ano">
    <button type="submit">Varificar Ano Bissexto</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        $ano = $_POST['ano'];
        
        if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
            echo "$ano é um ano bissexto";
        } else {
            echo "$ano não é um ano bissexto";
        }
    }
?>