<?php

$contasCorrentes = [
   '00001' => [
    'titular' => 'Vinicius',
    'saldo' => 1000
], 
    '00002' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '00003' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
    ];

// adicionar mais valores na array

$contasCorrentes ['00004'] = [
    'titular' => 'claudia',
    'saldo' => 2000,
];

// .....  menos legivel, mas valida tbm seria:
/* for($i =0; $i < count ($contasCorrentes; $i++)) {
    echo $contasCorrentes [$i] [titular] . PHP.EOL;
} */


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
};


