<?php
function inicio() {
    echo "Digite um número: ";
    $num = intval(trim(fgets(STDIN)));

    if ($num % 2 == 0) {
        echo "$num é PAR";
    } else {
        echo "$num é ÍMPAR";
    }
}