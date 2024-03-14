<?php
/*
WHILE E DO WHILE
- UM BLOCO DE CÓDIGO DEVE SER REPETIDO ENQUANTO UMA CONDIÇÃO VERDADEIRA

| *** SINTAXE *** |

// condicional pré-teste
While (condição) {

    // bloco de código

}



// condicional pós-teste
do {

    // bloco de código

} while (condição);

*/

$frutas = ["banana", "maça", "pera", "uva"];

// $cont = count($frutas);

// $i = 0;

// while ($i < $cont) {

//     if ($frutas[$i] == "pera") {
//         break;
//     }

//     echo $frutas[$i] . "\n";

//     $i++; 
// }

$cont = count($frutas);
$i = 3;

do {

    echo $frutas[$i] . "\n";

    $i++;

} while ($i < $cont);

?>