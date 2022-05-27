<?php

//criando subrotinas

function exibeMensagem ($mensagem) 
{
    echo $mensagem . PHP_EOL;
};

/*
## VALOR E REFERÊNCIA

Ao invés de simplesmente recebermos a $conta(uma cópia dela) na função titularComLetrasMaiusculas(), 
vamos receber o endereço (referência ao valor original) para a conta com &$conta. 
Esse (&) informa que estamos recebendo a variável em si, e não uma cópia dela.
*/

function titularComLetrasMaiusculas (array &$conta) 
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
};

/* o valor float foi adicionado aqui, para evitar que $valorASacar receba qualquer outro "tipo ex: string", gerando um erro na função, e não excutando o código corretamente.
o valor array antes de contae : array, é para definir o valor que quero receber e  retorno, também array

## Quando explicitamos o tipo, aumentamos a segurança do código e facilitamos a procura por erros.

*/
function saque (array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Não há saldo para sacar!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
};

function deposito (array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0) {
     $conta["saldo"] += $valorADepositar;
     return $conta;

    } else {
        exibeMensagem("Depósitos precisam ser positivos.");
    }

};


$contasCorrentes = 
[
   '001' => [
    'titular' => 'Vinicius',
    'saldo' => 1000
], 
    '002' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '003' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

//vamos realizar um 'saque' na conta da Maria.
$contasCorrentes ['002'] = saque($contasCorrentes ['002'], 500);

// vamos fazer um depósito na conta do pobre do alberto, senhoras e senhores!
$contasCorrentes ['003'] = deposito($contasCorrentes['003'], 1000);

// alterar o nome de titular para maiúculas com referência... ver função.
titularComLetrasMaiusculas($contasCorrentes ['001']);

/*Quando temos dados mais "complexos" para tratar dentro de uma string, como arrays associativos, envolvemos esse dado em chaves {}
https://www.php.net/manual/en/language.types.string.php documentação sobre string */

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "CPF: $cpf NOME: {$conta ['titular']} SALDO: {$conta['saldo']}"
    );
};


unset ($contasCorrentes['003']); //Vamos remover um 'cliente-Alberto' do nosso banco.

exibeMensagem("Alberto, não faz mais parte do nosso banco, pegou COVID-19 e não resistiu!");

// outra forma de "buscar" os dados de uma array para uma variavel: (vou tracar as ordem de exibição)

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    exibeMensagem(
        "SALDO: $saldo NOME: $titular CPF:$cpf"
    );
};


/*  Trabalhar com arquivos diferentes:

para melhorarmos a nossa aplicação, então, recortaremos todas as funções presentes em banco.php e colaremos no novo arquivo.

## include 'funcoes.php'; ele é feito para a inclusão de arquivos não essenciais para o funcionamento do programa. 
## require 'funcoes.php'; para incluir arquivos obrigatórios, usamos a estrutura de linguagem require.
## require_once 'funcoes.php'; para incluirmos um arquivo apenas se ele não tiver sido incluído anteriormente, podemos utilizar o require_once.

>>>>>>>>>>>>>>>>> Erroooooooooouuuu (php_Fautão)

E_NOTICE ocorre quando o PHP encontra algum problema, mas consegue contorná-lo e devolve um valor nulo (Null).
E_WARNING é um aviso de que o PHP não conseguiu realizar alguma instrução, mas continuará a execução do programa.
E_ERROR é o PHP informando que ocorreu um problema e não conseguirá continuar com a execução. */