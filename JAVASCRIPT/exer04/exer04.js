/*
Ler 3 valores (considere que não serão informados
 valores iguais) e escrever a soma dos 2 maiores.
*/
var valor = 0; 
var soma = 0;

alert("Olá")

for (var i=1; i >= 3; i++) {
     
    valor = parseInt(prompt("Insira um valor: "));
    console.log("Valor inserido foi: " + valor);

    if (valor > soma) {
        soma = soma + valor;
    }
}
console.log(soma);