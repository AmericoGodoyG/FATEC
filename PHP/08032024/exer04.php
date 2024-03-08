<form  action="#" method="POST">
    <input type="text" name="texto" placeholder="Digite um texto">
    <button type="submit">Calcular Comprimento</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $texto = $_POST['texto'];
        $comprimento = strlen($texto); // strlen função que verifica a qtde de caracteres
        echo "Comprimento de $texto é de $comprimento";

    }
?>