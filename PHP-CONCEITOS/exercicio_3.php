
<?php
    $somaImpar=0;

while (true) {
    echo("Escreva um número inteiro: ");
    $num_a = trim(fgets(STDIN));  
    echo("Escreva outro número inteiro: ");
    $num_b = trim(fgets(STDIN));

    if ($num_a < $num_b) {
        break;
    }
}
    for ($x = $num_a; $x < $num_b; $x++){
        if ($x % 2 != 0){
            $somaImpar += $x;
        }
    }
    echo($somaImpar);

