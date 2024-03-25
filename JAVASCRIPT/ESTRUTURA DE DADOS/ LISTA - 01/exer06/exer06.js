var salario = parseFloat(prompt("Insira o valor do seu salário R$:"));
var vendas = parseFloat(prompt("Insira o valor das suas vendas R$:"));

if (vendas <= 1500) {
    novoSalario = salario + (vendas * 0.03);

} else {
    novoSalario =  salario + (vendas * 0.05);

}

console.log(`Salário + Comissão é R$ ${novoSalario}`);