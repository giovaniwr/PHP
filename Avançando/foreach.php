<?php

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
$contaCorrente['123.456.458-78'] = [
    'titular'=> 'Claudia',
    'saldo' => 250
];

foreach ($contaCorrente as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
};