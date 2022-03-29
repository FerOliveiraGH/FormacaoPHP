<?php

use Banco\Negocio\Conta\ContaCorrente;
use Banco\Negocio\Conta\ContaPoupanca;
use Banco\Negocio\Conta\Titular;
use Banco\Negocio\Endereco;
use Banco\Negocio\Cpf;

require_once 'autoload.php';

$endereco = new Endereco('Curitiba', 'Centro', 'Xv de Novembro','524A');
$cliente = new Titular(new Cpf('123.456.789-10'), 'Fernando Oliveira', $endereco);
$contaCorrente = new ContaCorrente($cliente);
$contaPoupanca = new ContaPoupanca($cliente);

$contaCorrente->depositar(100);
$contaCorrente->sacar(90);
print($contaCorrente . PHP_EOL);

$contaPoupanca->depositar(100);
$contaPoupanca->sacar(90);
print($contaPoupanca . PHP_EOL);

