<form  action="#" method="POST">
    <input type="text" name="numeros" placeholder="Digite os números separados por vírgula">
    <button type="submit">Calcular Média</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        $numeros =  explode(',', $_POST['numeros']);// divide a qtde de strings em uma entrada
        $soma = array_sum($numeros);// array_sum: calcula a soma dos valores em um array
        $media = $soma / count($numeros);// count — Conta todos os elementos de um array ou de um objeto Countable

        echo "A média dos números é: $media";
    }

?>