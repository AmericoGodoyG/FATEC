<?php
 /* 
    *** ESTRUTURA CONDCIONAL => IF ***

    $variavel1 = true;
    $variavel2 = true;
    $variavel3 = true;

    if ($variavel1 == $variavel2 && 10 > 5) {
        echo "Primeiro If";
        if (8 == 4) {
            echo "Verdadeiro"; // mensagem não exibina no console.
        }
    }

 

    *** ESTRUTURA CONDCIONAL => IF ELSE ***

    $nota = 7; 

    if ($nota >= 7) {
        echo "Aluno(a) aprovado !";
    } else {
        echo "Aluno(a) reprovado !";
    }



     *** OPERADOR TERNÁRIO *** 

    VERSÃO COMPACTA DO IF.

    Primeiro declaramos a condição; logo após o sinal de interrogação (?), 
    o código a ser executado caso a condição seja verdadeira; 
    e depois dos dois pontos, o código a ser executado caso contrário.


    SINTAXE: condição ? codigoUm : codigoDois;

     echo $nota >= 7 ? "Aluno(a) aprovado !" : "Aluno(a) reprovado !";




    *** ESTRUTURA CONDICIONAL IF-ELSEIF - ELSE ***
 
    $nota = 1; 

    if ($nota >= 7) {
        echo "Aluno(a) aprovado !";

    } else if (($nota < 7) && ($nota >= 4)) {
        echo "Aluno(a) está em recuperação";

    } else if (($nota < 4) && ($nota >=2))  {
        echo "Aluno(a) está em conselho de classe";

    }
    else { // não é obrigatória sua existência.
        echo "Aluno(a) reprovado !";

    }*



    *** ESTRUTURA CONDICIONAL SWITCH CASE ***

    $sorteio = rand(0,5); // função rand gera um inteiro randomico.

    echo "Valor sorteado: " . $sorteio;

    switch ($sorteio) { 
        case 0:
            echo " => Você ganhou 2 pontos";
            break;
        
        case 1:
            echo " => Você perdeu 1 ponto";
            break;
        
        case 2:
            echo " => Você ganhou um bônus! Parabéns ganhou 3 pontos";
            break;

        default:
            echo " => Jogue novamente!";
            break;
    }
*/ 

?>