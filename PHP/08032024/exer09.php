<form  action="#" method="POST">
    <input type="text" name="frase" placeholder="Digite as palavras separadas por espaço">
    <button type="submit">Contar Palavras</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        $frase = $_POST['frase'];
        $palavras = explode(' ', $frase);

        foreach (array_count_values($palavras) as $palavra => $contagem) {
            echo "$palavra: $contagem <br>";
        }
    }
?>