/*
Escreva um programa que receba um numero de mês e apresente seu nome escrito. [ok]
*/

var mes = 0;

mes = parseInt(prompt("Insira o número correspondente a um mês: "));

switch (mes) {
    case 1:
        console.log("Janeiro");
    break;

    case 2:
        console.log("Fevereiro");
    break;

    case 3:
        console.log("Março");
    break;

    case 4:
        console.log("Abril");
    break;

    case 5:
        console.log("Maio");
    break;

    case 6:
        console.log("Junho");
    break;

    case 7:
        console.log("Julho");
    break;

    case 8:
        console.log("Agosto");
    break;

    case 9:
        console.log("Setembro");
    break;

    case 10:
        console.log("Outubro");
    break;

    case 11:
        console.log("Novembro");
    break;

    case 12:
        console.log("Dezembro");
    break;

    default:
        alert("Insira um valor válido");
}