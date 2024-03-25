var notas = [];

// ARMAZENDO AS TRÊS NOTAS DE UM ALUNO EM ARRAY DINÂMICO.
for (var i = 0; i < 3; i++) {
    notas[i] = parseFloat(prompt("Insira a " + (i+1) + "ª nota: "));  
}

// SOMA ENTRE AS NOTAS ARMAZENADAS NO ARRAY NOTA.
var soma = 0;
for (var i = 0; i < 3; i++) {
    soma = soma + notas[i];
}

var media = soma / 3;

if ((media >= 7) && (media < 10)) {
    console.log("Aprovado!");
} else if (media == 10) {
    console.log("Aprovado com distinção!");
} else {
    console.log("Reprovado.");
}

/*

ou 

if (media == 10) {
    console.log("Aprovado com distinção!");

} else if (media >= 7) {
    console.log("Aprovado!");

} else {
    console.log("Reprovado.");
}

*/
