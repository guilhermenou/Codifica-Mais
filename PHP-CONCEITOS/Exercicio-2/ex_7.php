<?php

echo "Digite um número de 1 a 10: ";
$num = readline();

for ($i = 1; $i <= 10; $i++) {
    $valor = $num * $i;
    echo "\n" . $valor;
}