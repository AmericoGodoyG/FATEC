/* 
Arrays 

Arrays são estruturas de armazenamento que possibilitam armazenar diversos
conteudos dentro de uma única variável.

No JS o Array aceita armazenar diversos tipos de variáveis dentro de uma
única variável 
 
Para declarar um Array usamos [] ou new Array ()  */

var arrayVazio = [];
var arrayVazioClasse = new Array ();// Neste exemplo usamos Orientação a Objetos.

// OS Arrays ja podem ser iniciados com valor
var nome = ["Maria", "José", "João", "Fatima"];

var numeros = [25, 56, 89, 0, 34, -98];

// posição         0     1     2     3
var misturado = ["Gol", 2002, 1.6, true];
// tamanho         1      2    3     4 

// Para alterar ou inserir um dado em um array, usamos a sua posição.
console.log("Array Vazio", arrayVazio);
arrayVazio[0] = "Primeiro Valor";
console.log("Array Vazio com vlaor inserido:", arrayVazio);

console.log("Exbindo apenas a posição 3 do array 'nomes' ", nome[3]);

// Para trabalhar com cada elemento do Array, usamo laço de repetição.
// A propriedade length retorna o tamanho do array.
for (var i; i < numeros.length; i++) {
    console.log(`Posição [${i}]:`, numeros[i]); // o uso da crase permite concatenar informação direto com texto.
}

// Exmplo de uso de Arrays.
diasSemana = [
    'Domingo', // 0
    'Segunda', // 1
    'Terça',   // 2
    'Quarta',  // 3
    'Quinta',  // 4
    'Sexta',   // 5
    'Sabado'   // 6
];

var dia = parseInt(prompt("Digite um número de 1 a 7"));
// Usamos o -1 para converter ps doas de 1 a 7 para as posições do array.
console.log(`Dia da Semana para ${dia}`, diasSemana[dia - 1]);
