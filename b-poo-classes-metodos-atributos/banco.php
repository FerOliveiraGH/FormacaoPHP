<?php

require 'src/Conta.php';
require 'src/Cliente.php';
require 'src/Cpf.php';

$cliente = new Cliente(new Cpf('123.456.789-10'), 'Fernando Oliveira');
$conta = new Conta($cliente);

$cliente2 = new cliente(new Cpf('123.456.788.11'), 'Fulano da Silva');
$conta2 = new Conta($cliente2);

try {
    $cliente3 = new cliente(new Cpf('1234'), '1234');
} catch (ClienteException $e) {
    print($e->getMessage() . PHP_EOL);
}
$conta3 = new Conta($cliente);

$conta->depositar(100);

$conta->sacar(10);

$conta->transferir(10, $conta2);


print($conta . PHP_EOL);
print($conta2 . PHP_EOL);
print('Código Banco: ' . Conta::codigoBanco() . PHP_EOL);

print('Total contas: ' . Conta::totalContas() . PHP_EOL);

unset($conta3);
print('Total contas: ' . Conta::totalContas() . PHP_EOL);
