<?php

$maior = PHP_INT_MIN;
$menor = PHP_INT_MAX; 

echo "Digite uma série de números inteiros. Digite 0 para parar.\n";

do {
    $numero = (int)readline("Digite um número: ");
    
    if ($numero != 0) {
        $maior = max($maior, $numero);
        $menor = min($menor, $numero);
    }
} while ($numero != 0);

if ($maior == PHP_INT_MIN && $menor == PHP_INT_MAX) {
    echo "Nenhum número foi digitado.\n";
} else {
    echo "O maior número digitado foi: $maior\n";
    echo "O menor número digitado foi: $menor\n";
}