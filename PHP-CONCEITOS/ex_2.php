<?php	
    echo"Primeira Nota: ";
	$n1 = trim(fgets(STDIN));
    echo"Segunda Nota: ";
	$n2 = trim(fgets(STDIN));
    echo"Terceira Nota";
	$n3 = trim(fgets(STDIN));

	$media=($n1+$n2+$n3)/3;
	echo"A média é: ";