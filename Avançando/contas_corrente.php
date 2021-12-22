<?php

$conta1 = [
    'Titular'=> 'Giovani',
    'Saldo'=> 200
];

$conta2 =[
    'Titular' => 'Andre',
    'Saldo'=> 1000
];

$conta3 =[
    'Titular'=> 'Anderson',
    'Saldo'=> 120
];

$contasCorrente = [$conta1, $conta2, $conta3];
for($i =0; $i <= count($contasCorrente);$i++){
echo $contasCorrente[$i]['Titular'] . PHP_EOL;
}