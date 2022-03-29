<?php

include 'c-funcoes-erro.php'; // caso não encontre o arquivo apenas gera um warning e continua a execução.
require 'c-funcoes.php'; // caso não encontre o arquivo finalizar a execução com erro.
require_once 'c-funcoes.php'; // caso arquivo já tenha sido carregado ignora.

$contasCorrentes = [
    12345678910 => ['nome' => 'Titular da Costa', 'saldo' => 1000],
    98765432199 => ['nome' => 'Titular da Silva', 'saldo' => 2000],
];

foreach ($contasCorrentes as $cpf => &$conta) {
    depositar($conta, 1500);
    sacar($conta, 1500);
    formartarNomeTitular($conta);
    echo mensagem($cpf, $conta);
}

var_dump($contasCorrentes);