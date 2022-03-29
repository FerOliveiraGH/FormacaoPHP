<?php

$idade = $argv[1] ?? 0;
$acompanhantes = $argv[2] ?? 0;

echo 'Você só pode entrar se tiver a partir de 18 anos ';
echo 'ou 16 anos acompanhado' . PHP_EOL;

echo "Você tem $idade anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Pode entrar!";
} elseif ($idade >= 16 && $acompanhantes >= 1) {
    echo "Pode entrar, você está acompanhado!";
} else {
    echo "Não pode entrar!";
}

