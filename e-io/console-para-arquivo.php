<?php

echo 'Digite um texto: ';

//$teclado = fopen('php://stdin', 'r');
//$digitos = fgets($teclado);

$digitos = fgets(STDIN);

file_put_contents('arquivo.txt', $digitos, FILE_APPEND);

echo file_get_contents('arquivo.txt');