<?php
/*

*** ARRAY ***

- ARMAZENA MULTIPLOS VALORES EM UMA ÚNICA VARIÁVEL
- ARRAYS NUMÉRICOS
- ARRAYS ASSOCIATIVOS 
- ARRAYS MULTIDIMENSIONAIS

*/

// DECLARANDO UM ARRAY 
$array = array (
    "Chaves" => "Valor",
);

//a partir do PHP 5.4
$array = [
    "Chave" => "Valor"
];


// *** ARRAY NUMÉRICO ***
// array inicia com a posição 0.

// var_dump exibe informações de uma varíavel, posições do array e tipos de elementos dentro deste array
$carros = ['Ferrari', 'BMW', 'Mercedes'];
    var_dump($carros); 
    print_r($carros[0]);



// *** ARRAY ASSOCIATIVO ***
// INDEXAÇÃO DOS ELEMENTOS NOMEADOS.
$endereco = [
    'cep' => '12345678',
    'numero' => '36264205',
    'cidade' => 'sao paulo', 
    'estado' => 'sao paulo'
];
print_r($endereco['estado']);



// *** ARRAY MULTIDIMENCIONAL ***
// array dentro de outro array.
$enderecoPessoas = [
    'pessoa1' => array(
        "cep" => "1234556788",
        "cidade" => "Sao Paulo"
    ),
    'pessoa2' => array(
        "cep" => "123458491",
        "cidade" => "Campinas"      
    ),
];

//isset verifica se a variável foi declarada e é diferente de null (nulo)
if (isset($enderecoPessoas['pessoa2']['cep'])) {
    print_r($enderecoPessoas['pessoa2']['cep']);
} else {
    echo "Chave inválida";
}

?>