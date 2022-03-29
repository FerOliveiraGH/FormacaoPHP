<?php

use Banco\Negocio\Conta\Titular;
use Banco\Negocio\Cpf;
use Banco\Negocio\Endereco;
use Banco\Negocio\Exceptions\PessoaException;
use Banco\Negocio\Funcionarios\Gerente;
use Banco\Negocio\Funcionarios\QualityAssurance;

require_once 'autoload.php';

try {
    $qa = new QualityAssurance(new Cpf('123.456.789-12'), 'Fulano da Silva', 5000);

    print($qa . PHP_EOL);

    $qa->autenticar('1234');

    print($qa . PHP_EOL);

    $gerente = new Gerente(new Cpf('123.456.789-11'), 'Gerente da Silva', 10000);

    $gerente->autenticar('4567');

    print($gerente . PHP_EOL);

    $endereco = new Endereco('Cidade', 'Bairro', 'Rua', 'Numero');
    $titular = new Titular(new Cpf('123.456.789-11'), 'Gerente da Silva', $endereco);

    print('Titular autenticado: ' . $titular->autenticar('9876'));
} catch (PessoaException $e) {
    //
}