<?php

$array = array(31, 8, 6, 2, 7);
$soma = 0;

echo "São pares os números: ";

for ($i = 0; $i < 5; $i++) {
    if ($array[$i] % 2 == 0) {
        echo $array[$i] . ", ";
        $soma = $soma + $array[$i];
    }
}

echo "\n e somando eles temos o valor de: " . $soma;