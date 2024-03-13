// Declarando um array dinâmico;
let notas = [];

// Armazenando as notas em um array 
for (let i = 0; i < 3; i++) {
    notas[i] = parseFloat(prompt("Digite a nota" + (i + 1) + ":"));
}

// Somando todas as notas
var soma = 0;
for (let i = 0; i < 3; i++) {
    soma += notas[i];
}

// Calculando a média
var media = 0;
media = soma / 3;

//Exibindo a média
console.log("Médias das notas = " + media);