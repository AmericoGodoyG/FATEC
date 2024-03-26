// DECLARANDO OS ARRAYS PARA NOME E PRECO DOS PRODUTOS.
var produtoNome = [];
var produtoPreco = [];

// INSERINDO OS NOMES E PRECOS DOS PRODUTOS 
for (var i = 0; i < 3; i++) {
    produtoNome[i] = prompt("Nome do " + (i + 1) + "º produto:");
    produtoPreco[i] = prompt("Preço do " + (i + 1) + "º produto:");
}

// TESTE COMPARATIVO DE PRECOS DOS PRODUTOS.
var maisBarato = produtoPreco[0];
var aux = 0;
for (var i = 1; i < 3; i++) {
    if (maisBarato > produtoPreco[i]) {
        maisBarato = produtoPreco[i];
        aux = [i];
    }
}

//EXIBINDO O NOME E O PRECO DO PRODUTO MAIS BARATO.
console.log("Produto: " + produtoNome[aux]);
console.log("Produto mais barato: " + maisBarato);