<?php

$arquivo = new SplFileObject('arquivo.csv','r');

//$arquivo->fputcsv(['teste', 'sim']);

while (!$arquivo->eof()) {
    $linha = $arquivo->fgetcsv();

    echo $linha[0] . PHP_EOL;
}