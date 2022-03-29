<?php

$texto = 'Texto de teste de inclusão. ' . uniqid() . PHP_EOL;

file_put_contents('arquivo.txt', $texto, FILE_APPEND);

echo file_get_contents('arquivo.txt');

var_dump(file('arquivo.txt'));