/*
Faça um programa que recebe a altura de um triangulo
em um número inteiro e imprima-o utilizando asteriscos. 
Veja o Exemplo:
Entrada: 5
*
**
***
****

*/
var valor = parseInt(prompt("Insira um valor para o trângulo: "));

for (let i = 1; i <= valor; i++) {
    let linha = '';
    for (let j = 1; j <= i; j++) {
        linha += '*';
    }
    console.log(linha);
}