<form method="POST">
    <input type="text" name="numero" placeholder="Digite um número">
    <button type="submit">Calcular</button>
</form>

<?php 
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $numero = $_POST['numero'];
            $quadrado =  $numero * $numero;
        }
        echo "Quadrado de $numero é = $quadrado";
?>
