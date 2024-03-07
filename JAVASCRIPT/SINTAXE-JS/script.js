// Isso é um comentário, NÃO lido pelo navegador

// ==== VARIÁVEIS ====

/* Este é um comentário com várias linhas

No JS temos os tipos básicos:
String -> Armazena textos;
Number -> Armazena números inteiros ou flutuantes;
Boolean -> Armazena TRUE e FALSE;

Para declarar uma varável usamos a palavra "var" antes do nome 

*/

var texto = "Hello World";
var idade = 24;
var altura = 1.82;
var professor = false;

/*

Nome de variável deve SEMPRE começar com letra minuscula.
Se o nome for composto, cada palavra começa com letra MAIUSCULA

*/

var nomeCompleto = "Américo Godoy da Silva";
var alunoFatecJahu = true;

// Exibir o conteudo da variável

// Alert -> exibe um pop-up na tela (Defasado)
alert(texto);
alert("Minha idade: " + idade); // concatenação;
alert('Altura: ' + altura + "metros"); 

//console.log -> Exibe os dados no console (USE SEMPRE!)
console.log("==== VARIÁVEIS ====");
console.log(texto);
console.log("Minha idade: " + idade);
//Podemos passar vários elementos usando a Virgula.
console.log("Altura: ", altura, "metros");

// Problema de ser fracamente tipado!
var numero = 500;
console.log("Numero: ", typeof numero);
var numeroComTexto = "500";
console.log("Texto: ", typeof numeroComTexto);

console.log("Numero + Texto", numero + numeroComTexto);
console.log("Numero + Numero", numero + idade);

// ler entrada do usuário | PROMPT SEMPRE RETORNA TEXTO
var valorRecebido = prompt("Digite alguma coisa: ");
console.log("Fui digitado: ", valorRecebido);

// parseInt converte para int
var inteiro = parseInt(prompt("Digite um numero inteiro"));
console.log("Numero inteiro + idade: ", inteiro + idade);

//parseFloat converte para float
var flutuante = parseFloat(prompt("Numero flutuante: "));
console.log("Flutuante + altura", flutuante + altura);

// Estruturas condiconais
console.log(" ==== IF / ELSE ====");
if (idade > 18) {
    console.log("Pessoa maior de idade!");
} else if (idade >= 16) {
    console.log("Menor, deve estar aconpanhado dos pais");
} else {
    console.log("Menor de 16 anos não pode entrar!");
}

console.log(" ==== SWITCH CASE ==== ");
var dia = parseInt(prompt("Digite um numero de 1 a 7"));
switch(dia) {
    case 1: //Compara de a variavel igual a 1
        console.log("Segunda-Feira");
        break; //enterompe a execução.
    case 2:
        console.log("Terça-Feira");
        break;
    case 3:
        console.log("Quarta-Feira");
        break;
    case 4:
        console.log("Quinta-Feira");
        break;
    case 5:
        console.log("Sexta-Feira");
        break;
    case 6:
        console.log("Sábado");
        break;
    case 7:
        console.log("Domingo");
        break;
    default:
        console.log("Não é um número de 1 a 7");
}

// Estrutura de repetição

console.log(" ==== WHILE ==== ");
// Math.random() gera um numero aleatorio de 0 a 1 ex: 0.5
// Multiplicando por um inteiro, vamos ter o intervalo de 0 até esse inteiro.
var sorteado = parseInt(Math.random() * 11);
var acertou = false;
while(acertou == false) {
    var chute = parseInt(prompt("Digite um número de 0 a 10"));
    if (chute == sorteado) {
        acertou = true;
        console.log("Chutou: ", chute);
        console.log("Sorteado: ", sorteado);
    }
}

//implemetar um contador de chutes e exiba a quantidade no final [OK]
console.log(" ==== WHILE ==== ");

var contChutes = 1; // contador acumulativo = 1
var sorteado = parseInt(Math.random() * 11);
var acertou = false;

while(acertou == false) {
    var chute = parseInt(prompt("Digite um número de 0 a 10"));
    if (chute == sorteado) {
        acertou = true;
        console.log("Chutou: ", chute);
        console.log("Sorteado: ", sorteado);
    }
    contChutes++; // acumula +1
}
console.log("Total de chutes = " + contChutes); // exibe os chutes contchutes

//refaça a loteria usando DO / WHILE.
var sorteado = parseInt(Math.random() * 11);
var acertou = false;
var contChutes = 1;
do {
    var chute = parseInt(prompt("Digite um numero de 0 a 10"));
    if (chute == sorteado) {
        acertou == true;
        console.log("Chutou: ", chute);
        console.log("Sorteado: ", sorteado);
    }
    contChutes++; // acumula + 1
}
while (acertou == false);
console.log("Quantidade de chutes: " + contChutes);


console.log(" === FOR === ");
// usado quando há uma qtde finita de repetições
// 1º cria-se uma variável de contagem i(interation) e atribui um valor inical
// 2º condição de parada, comparar o "i" com a quantidade fim de repetição
// 3º incremento da variável de contagem, geralmente i++, porém pode ser outros.

var media = 0;
for(var i = 0;  i < 3; i++) {
    var nota = parseFloat(prompt(`Digite a nota nº [${i + 1}]:`)); // crase permite a injeção de valores na variável sem concatenação.
    media = media + nota;       // `Digite a nota nº [' + i + ]:'
}
media = media / 3;
console.log(`A média do aluno é ${media}`);