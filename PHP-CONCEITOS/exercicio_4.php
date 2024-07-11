<?php 
$numeroDigitado = 0;
while (true) {
echo("Escreva um número inteiro (ou digite -1 para terminar): ");
$numeroDigitado = trim(fgets(STDIN));
$numeros[] = $numeroDigitado;

if ($numeroDigitado == -1) {
    echo("Programa finalizado.");
    break;
};
    foreach($numeros as $numero){
        
    echo("");
}
}

