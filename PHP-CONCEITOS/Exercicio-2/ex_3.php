<?php

    echo("Escreva seu nome: ");
    $nome = trim(fgets(STDIN));
    echo ("Escreva sua idade: ");
    $idade = trim(fgets(STDIN));
    
    if ($idade>=18) { 
    echo("$nome você é maior de idade.");
    }
    else {
    echo("$nome você é menor de idade.");
    }



    
    