<?php

echo "Digite um número: ";
$num = readline();

if ($num % 2 == 0) {
    echo $num . " é PAR";
} else {
    echo $num . " é ÍMPAR";
}