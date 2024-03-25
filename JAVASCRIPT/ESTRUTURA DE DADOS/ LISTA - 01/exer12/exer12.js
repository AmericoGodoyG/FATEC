// DECLARANDO UM ARRAY PARA O ARMAZENAMENTO DE 15 ELEMENTOS (VALORES)
var idade = [];

// ARMEZENANDO QUINZE IDADES EM UM ARRAY.
for (var i = 0; i < 15; i++) {
    idade[i] = parseInt(prompt("Insira a " + (i+1) + "ª idade: "));
};

// CRIANDO CONTADORES PARA CADA FAIXA DE IDADE
var a = 0;
var b = 0;
var c = 0;
var d = 0;
var e = 0;

/* LAÇO DE REPETIÇÃO COM TESTE CONDICIONAL ENCADIADO PARA DETERMINAR A QTDE DE 
EM UM INTERVALO DE IDADES.
*/
for (var i = 0; i < 15; i++) {
   if (idade[i] <= 15) {
        a += 1;
   } else if (idade[i] <= 30) {
        b += 1;
   } else if (idade[i] <= 45) {
        c += 1;
   } else if (idade[i] <= 60) {
        d += 1; 
   } else {
        e += 1;
   }
};

// SAÍDA DE DADOS
console.log("Pessoas até 15 anos: " + a);
console.log("Pessoas de 16 a 30 anos: " + b);
console.log("Pessoas de 31 a 45 anos: " + c);
console.log("Pessoas de 46 a 60 anos: " + d);
console.log("Pessoas de acima de 61 anos: " + e);