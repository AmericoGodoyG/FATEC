<?php
/*

$a and $b   E    | Verdadeiro se ambos forem verdadeiro.

$a or $b    OU   | Verdadeiro quando uma ou ambas foram verdadeira. 

$a xor $b   XOR  | Verdadeiro se ambos os numeros forem diferentes um do outro.


!$a              | Negação da expressão. se (V) entao (F) | (F) então (V).

$a && $b         | Verdadeiro se ambos forem verdadeiro.

$a || $b         | Verdadeiro se um for verdade.

====================
ORDEM DE PRECEDÊNCIA
====================

1º ! (negação)

2º && (e)

3º || (ou) 

*/

$bool = true && false;
var_dump($bool); // false

$bool = (true and (true and false));
var_dump($bool); // true | = tem MAIOR precedência que o AND;
                //false |o uso o parenteses em (true and false);


// comparando se 7 é igual a 7 e se 9 é menor que 7
var_dump(7 == 7 and 9 < 7); // false

// comparando se 7 é diferente a 7 e se 9 é menor que 7
var_dump(7 != 7 or 9 < 7); // false

// comparando se 7 é diferente a '7'(string) e se 9 é menor que 7
// === identifica o tipo de variável;
var_dump(7 === 7 or 9 < 7); // false

//expressão é verdade quando uma for deferente da outra
var_dump(7 === 7 xor 9 < 7); // true


?>