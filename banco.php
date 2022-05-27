<?php

include_once 'funcoes.php';

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

$contasCorrentes ['002'] = saque($contasCorrentes ['002'], 500);

$contasCorrentes ['003'] = deposito($contasCorrentes['003'], 1000);

titularComLetrasMaiusculas($contasCorrentes ['001']);

unset ($contasCorrentes['003']);
exibeMensagem("Alberto, não faz mais parte do nosso banco, pegou COVID-19 e não resistiu!");

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    exibeMensagem(
        "SALDO: $saldo NOME: $titular CPF:$cpf"
    );
};


