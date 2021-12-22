<?php

function sacar(array $conta, float $valorASacar): array
{

    if($valorASacar > $conta['saldo']){
        exibeMensagem ('Você não pode sacar');
    }else{
        $conta['saldo']-= $valorASacar;
    }
    return $conta;
};

function depositar (array $conta, float $valorADepositar): array
{
    if ($valorADepositar < 0){
        exibeMensagem('insira um valor valido');
    }else{
        $conta['saldo'] += $valorADepositar;
    }
    return $conta;
};

function exibeMensagem(string $mensagem ){
    echo $mensagem . PHP_EOL;
};

function titularComLetraMaiusculas(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);

};