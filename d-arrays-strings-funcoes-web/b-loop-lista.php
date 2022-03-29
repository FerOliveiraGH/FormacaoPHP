<?php

$idadeLista = [21, 22, 23, 20];

for ($i = 0; $i < count($idadeLista); $i++) {
    echo $idadeLista[$i] . PHP_EOL;
}

$contasCorrentes = [
    12345678910 => ['nome' => 'Titular da Costa', 'saldo' => 1000],
    98765432199 => ['nome' => 'Titular da Silva', 'saldo' => 2000],
];

foreach ($contasCorrentes as $cpf => $conta) {
    print($cpf . ' - ' . $conta['nome'] . ' - ' . $conta['saldo'] . PHP_EOL);
}