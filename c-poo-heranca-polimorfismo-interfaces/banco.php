<?php

require_once 'autoload.php';

use Banco\Negocio\Conta\Conta;
use Banco\Negocio\Conta\ContaCorrente;
use Banco\Negocio\Conta\Titular;
use Banco\Negocio\Cpf;
use Banco\Negocio\Endereco;
use Banco\Negocio\Exceptions\PessoaException;

$endereco = new Endereco('Curitiba', 'Centro', 'Xv de Novembro','524A');
$cliente = new Titular(new Cpf('123.456.789-10'), 'Fernando Oliveira', $endereco);
$conta = new ContaCorrente($cliente);

$endereco2 = new Endereco('Curitiba', 'Centro', 'Xv de Novembro','524C');
$cliente2 = new Titular(new Cpf('123.456.788.11'), 'Fulano da Silva', $endereco2);
$conta2 = new ContaCorrente($cliente2);

try {
    $cliente3 = new Titular(new Cpf('1234'), '1234', $endereco);
} catch (PessoaException $e) {
    print($e->getMessage() . PHP_EOL);
}
$conta3 = new ContaCorrente($cliente);

$conta->depositar(100);

$conta->sacar(10);

$conta->transferir(10, $conta2);


print($conta . PHP_EOL);
print($conta2 . PHP_EOL);
print('Código Banco: ' . Conta::codigoBanco() . PHP_EOL);

print('Total contas: ' . Conta::totalContas() . PHP_EOL);

unset($conta3);
print('Total contas: ' . Conta::totalContas() . PHP_EOL);
