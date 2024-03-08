<form  action="#" method="POST">
    <input type="text" name="data" placeholder="Digite uma data (dd/mm/aaaa)">
    <button type="submit">Verificar data Válida</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        $data = $_POST['data'];

        if (strtotime($data) !== false && checkdate(date('m', strtotime($data)), date('d', strtotime($data)),
                                                    data('Y', strtotime($data)))) {
            echo "$data é uma data válida.";
        } else {
            echo "$data não é uma data válida.";
        }
    }
?>