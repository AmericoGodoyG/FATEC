/*
Escreva um algoritmo que calcule e imprima a tabuada (1 a 10) de um numero digitado pelo usuário. [ok]
*/

var tabuada = 0;

tabuada = parseInt(prompt("Insira a tabuada desejada: "));

for (var i = 1; i <= 10; i++) {

    console.log(tabuada + " X " + i + " = " + tabuada * i);

}