// ARRAY DINÂMICO
var temperatura = [];

// ARMAZENANDO SETE VALORES NO ARRAY temperatura
for (var i = 0; i < 7; i++) {
    temperatura[i] = parseFloat(prompt((i+1) + "ª Temperatura: "));
}

// EXIBINDO OS SETES VALORES DO ARRAY temperatura
for (var i = 0; i < 7; i++) {
    console.log("Dia"+ (i+1)+ " " + temperatura[i] + "°C");
}

// SOMA ENTRE OS SETES VALORES DO ARRY. 
var soma = 0; 
for (var i = 0; i < 7; i++) {
    soma += temperatura[i];
}

// MÉDIA DAS TEMPERATURAS DOS SETE DOS DIAS. 
var media = soma / 7; 
console.log("A temperatura média da semana foi de " + media + "°C");