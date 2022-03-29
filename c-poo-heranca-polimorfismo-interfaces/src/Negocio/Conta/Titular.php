<?php

namespace Banco\Negocio\Conta;

use Banco\Negocio\Cpf;
use Banco\Negocio\Exceptions\PessoaException;
use Banco\Negocio\Pessoa;
use Banco\Negocio\Endereco;
use Banco\Servicos\Autenticador;

class Titular extends Pessoa implements Autenticador
{
    private Endereco $endereco;

    /** @throws PessoaException */
    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    public function endereco(): Endereco
    {
        return $this->endereco;
    }

    public function autenticar(string $senha): int
    {
        return '9876' == $senha;
    }
}