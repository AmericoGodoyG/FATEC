var valor = parseInt(prompt("Insira um valor:"));

console.log("Número Pares: ");
for (var i = 1; i <= valor; i++) {
    if (i % 2 === 0) {
        console.log(i + " é par");
    } else {
        console.log(i + " é ímpar");
    }
}
