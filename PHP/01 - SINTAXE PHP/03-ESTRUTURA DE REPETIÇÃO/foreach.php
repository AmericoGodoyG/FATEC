<?php

/*

 *** FOREACH ***
- SIMPLIFICAÇÃO DO COMANDO FOR

SINTAXE
foreach ($variable as $key => $value) { // key opcional 
    
}
 */

 $arr = [1,2,3,4,5,6,7,8,9,10];

// for ($i=0; $i < 10; $i++) {
//     echo $arr[$i] . "\n";
// }

//FOREACH: PARA CADA ELEMENTO DESTE ARRAY ELE IRÁ ATRIBUIR O VALOR DO ELEMENTO À VALUE
foreach ($arr as $indice => $value) {

    if ($value == 2) { // SAÍDA DO LOOPING COM O COMANDO BREAK
        break;
    }

    if ($value % 2 == 0) {
        continue; // CONTINUA A EXECUÇÃO DO LOOPING
    }
    echo "valor do índice: " . $indice . " valor: " . $value . "\n";
}

?>