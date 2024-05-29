<?php

$numeros = array(10, 9, 5, 4, 17, 28, 3, 77, 21, 2);
$menorNumero = $numeros[0];

echo "Entre os números: ";
foreach ($numeros as $numero) {
    if ($numero < $menorNumero) {
        $menorNumero = $numero;
    }
    echo " ", $numero;
}

echo "\nO menor número é: ", $menorNumero;