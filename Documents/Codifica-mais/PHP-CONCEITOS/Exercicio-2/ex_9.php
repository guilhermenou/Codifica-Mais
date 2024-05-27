<?php
function verificarNome($array, $nome) {
    $posicao = array_search($nome, $array);
    if ($posicao !== false) {
        echo "O nome '$nome' está presente no array na posição $posicao.";
    } else {
        echo "O nome '$nome' não está presente no array.";
    }
}

echo "Digite 7 nomes para preencher o array:\n";
$arrayNomes = [];
for ($i = 0; $i < 7; $i++) {
    echo "Digite o nome ", $i + 1, ": ";
    $nome = readline();
    $arrayNomes[] = $nome;
}

echo "Digite o nome a ser verificado: ";
$nomeVerificado = readline();
verificarNome($arrayNomes, $nomeVerificado);
