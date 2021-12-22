<?php

require_once 'funcoes.php';

$contaCorrente =[
    '123.456.789-10' =>[
        'titular'=> 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' =>[
        'titular'=> 'Pedro',
        'saldo' => 200
    ],
    '123.456.789-12' =>[
        'titular'=> 'Paulo',
        'saldo' => 300
    ],
];


$contaCorrente['123.456.789-10'] = sacar($contaCorrente['123.456.789-10'], 500);
$contaCorrente['123.456.789-10'] = depositar($contaCorrente['123.456.789-10'], 2000);
$contaCorrente['123.456.789-11']= depositar($contaCorrente['123.456.789-11'],600);
$contaCorrente['123.456.789-10'] = sacar($contaCorrente['123.456.789-10'],3000);

titularComLetraMaiusculas($contaCorrente['123.456.789-10']);

foreach ($contaCorrente as $cpf => $conta){
    ['titular'=> $titular, 'saldo' => $saldo]=$conta;
    exibeMensagem( "$cpf $titular $saldo");
};