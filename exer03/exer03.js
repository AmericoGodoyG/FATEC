

var nota1 = parseFloat(prompt("Insira a 1º nota:"));
var nota2 = parseFloat(prompt("Insira a 2º nota:"));
var nota3 = parseFloat(prompt("Insira a 3º nota:"));

var media = 0;

var media = (nota1 + nota2 + nota3) / 3;

alert(media);

// DELIMITEI UM INTERVALO DE 7 A 9 (APROVADO)
// CASO A MEDIA SEJA IGUAL A 10 (APROVADO COM DISTINÇÃO)
// CASO A MEDIA N SATISFAÇA O INTERVALO E SEJA DIFERENTE DE DEZ, REPROVADO.
if (media >= 7 && media < 10){
    console.log("Aprovado");
} else if (media == 10) {
    console.log("Aprovado com Distinção");
} else {
    console.log("Reprovado");
}