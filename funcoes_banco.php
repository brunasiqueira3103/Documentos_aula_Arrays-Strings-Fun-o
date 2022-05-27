<?php

function exibeMensagem ($mensagem) 
{
    echo $mensagem . PHP_EOL;
};

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

function titularComLetrasMaiusculas (array &$conta) 
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
};