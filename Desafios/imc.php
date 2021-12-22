<?php

$altura =1.81;
$peso = 135;
$imc = ($peso/($altura*$altura));

if($imc <18.5){
    echo "Seu indice está abaixo". PHP_EOL;
}elseif ($imc >= 18.5 && $imc < 24.9){
    echo "Seu indice está normal". PHP_EOL;
}else{
    echo "Procure um médico seu gordo". PHP_EOL;
}