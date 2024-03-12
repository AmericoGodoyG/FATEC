<?php
/*
//         ====== COMANDO DE INCREMENTO E DECREMENTO ======
os operadores de incremento e decremento afrentam apenas NÚMEROS e STRINGS

PRÉ-INCREMENTO
    ++$a  

Incrementa $a em um, e então retora $a.
    

PÓS-INCREMENTO
    $a++

Retorna $a, e então incrementa $a em um.


PRÉ-DECREMENTO 
    --$a 

Decrementa $a em um, e então retorna $a.


PÓS-DECREMENTO
    a--

Retorna $a, e então decrementa $a em um. */


echo  "Pós-Incremento" . "\n";
$a = 5;
echo "Deve ser 5: " . $a++ . "\n"; // incrementa +1 a $a
echo "Deve ser 6: " . $a . "\n";   // exibe o novo valor de $a = 6.


echo  "Pré-Incremento" . "\n";
$a = 5;
echo "Deve ser 6: " . ++$a . "\n"; // o valor de $a passou a ser 6 (na mesma linha).
echo "Deve ser 6: " . $a . "\n";   //


echo  "Pós-Decremento" . "\n";
$a = 5;
echo "Deve ser 5: " . $a-- . "\n"; // decrementa -1 a $a
echo "Deve ser 4: " . $a . "\n";   // exibe o novo valor de $a = 5.


echo  "Pré-Decremento" . "\n";
$a = 5;
echo "Deve ser 4: " . --$a . "\n"; // o valor de $a passou a ser 4 (na mesma linha).
echo "Deve ser 4: " . $a . "\n";   // exibe o novo valor de $a = 4


//DECREMENTANDO UM VALOR NULO
echo  "Pré-Decremento" . "\n";
$a = null;
echo "Deve ser : " . --$a . "\n"; 
echo "Deve ser : " . $a . "\n";   
echo "DECREMENTAR VALORES NULOS NÃO GERAM EFEITOS.";

//INCREMENTANDO UM VALOR NULO
echo "Pós-Incremento" . "\n";
$a = null;
echo "Deve ser : " . $a++ . "\n"; 
echo "Deve ser 1: " . $a . "\n";   
echo "INCREMENTAR VALORES NULOS GERAM O VALOR 1";

?>