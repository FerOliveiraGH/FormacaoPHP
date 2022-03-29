<?php

$idadeLista = [21, 22, 23]; // array()

print('Primeiro item: ' . $idadeLista[0] . PHP_EOL); // Primeiro item na posição 0 do array

[$idade1, $idade2] = $idadeLista; // list()

print($idade1 . PHP_EOL);
print($idade2 . PHP_EOL);

unset($idadeLista[2]); // remover um item da lista

var_dump($idadeLista);