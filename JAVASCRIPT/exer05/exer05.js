/*
Escreva um aplicativo que recebe inteiro e mostra a 
soma dos números pares e ímpares (separados), de 1 até esse inteiro.
*/

//[ok]

var soma = 0;
var somaImpar = 0;
// ordenando pares

var valor = parseInt(prompt("Inisra um valor: "));

if (valor % 2 == 0) {
    for (var i = 1; i <= valor; i++) {
       if (i % 2 == 0) {
           soma = soma + i;
        } else {
           somaImpar = somaImpar + i;
       }
    }
} 
console.log("Soma par : " + soma);
console.log("Soma impar: " + somaImpar);