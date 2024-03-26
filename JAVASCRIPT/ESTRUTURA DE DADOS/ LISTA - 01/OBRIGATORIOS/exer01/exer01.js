// DEFININDO A QUANTIDADE DE ENTRADAS DE VALORES DAS N.F.
var n = parseInt(prompt("Insira a quantidade de N.F a serem lançadas:"));

// ARMAZENANDO O NÚMERO DE IDENTIFICAÇÃO  E O VALOR DAS NOTAS FISCAIS.
var notaFiscal = [];
var valorNota = [];
for (var i = 1; i <= n; i++) {
    notaFiscal[i] = parseInt(prompt("Insira o nº da " + (i) + "ª Nota Fiscal:"));
    valorNota[i] = parseFloat(prompt("Insira o valor da " + (i) + "ª Nota Fiscal:"));
}

// EXIBINDO TODAS AS N.F CADASTRADAS.
for (var i = 1; i <= n; i++) {
    console.log((i+1) + "ª - "+ "Número N.F: " + notaFiscal[i] + " | Valor R$" + valorNota[i]);                    
}

// SOMANDO OS VALORES DE TODAS AS NOTAS ARMAZENADAS ANTERIORMENTE E EXIBINDO OS VALORES SOMADOS.
var soma = 0;
for (var i = 1; i <= n; i++) {
    soma += valorNota[i];                    
}
console.log("N.F Soma = R$" + soma);

// CALCULANDO A MÉDIA DO TOTAL DA SOMA DOS VALROES DAS NOTAS E EXIBINDO A MÉDIA DOS VALORES.
var media = soma / n; 
console.log("N.F Média = R$" + media);

//PROCESSANDO NÚMERO E VALOR DA MAIOR NOTA FISCAL E EXIBINDO NÚMERO E VALOR MAIOR.
var maior = valorNota[1];
var auxMaior = 0;
for (var i = 2; i <= n; i++) {
    if (maior < valorNota[i]) {
        maior = valorNota[i];
        auxMaior = [i];
    }
}
console.log("Número N.F MAIOR:" + notaFiscal[auxMaior]);
console.log("Valor N.F  MAIOR: R$" + maior);

//PROCESSANDO O NÚMERO E VALOR DA MENOR NOTA FISCAL E EXIBINDO NÚMERO E VALOR MENOR.
var menor = valorNota[1];
var auxMenor = 0;
for (var i = 2; i <= n; i++) {
    if (menor > valorNota[i]) {
        menor = valorNota[i];
        auxMenor = [i];
    } else {
        auxMenor = [(i - i) + 1]; // CASO O valorMenor[i] seja menor que todos os outros, adotei essa expressão para corrigir um problema de undefined para auxMenor(devido ao laço começar na posição 2 (var i = 2), e menor valor está localizado no índice 1 do array notaFiscal).
    }
}
console.log("Número N.F MENOR:" + notaFiscal[auxMenor]); 
console.log("Valor N.F MENOR: R$:" + menor);