<?php

$contasCorrentes = [
    12345678910 => ['nome' => 'Titular da Costa', 'saldo' => 1000],
    98765432199 => ['nome' => 'Titular da Silva', 'saldo' => 2000],
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf - {$conta['nome']} - $conta[saldo]" . PHP_EOL;
}
