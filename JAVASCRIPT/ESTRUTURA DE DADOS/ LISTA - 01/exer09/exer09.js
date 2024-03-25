var ladoUm = parseFloat(prompt("Insira o valor do 1º lado: "));
var ladoDois = parseFloat(prompt("Insira o valor do 2º lado: "));
var ladoTres = parseFloat(prompt("Insira o valor do 3º lado: "));

if (ladoUm == ladoDois && ladoDois == ladoTres) {
    console.log("Triângulo Equilátero!");

} else if (ladoUm == ladoDois ||  ladoUm == ladoTres || ladoDois == ladoTres) {
    console.log("Triângulo Isósceles!");

} else {
    console.log("Triângulo Escaleno!");
    
}