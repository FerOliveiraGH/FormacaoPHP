<?php

namespace Banco\Negocio;

use Banco\Negocio\Exceptions\PessoaException;

abstract class Pessoa
{
    private Cpf $cpf;
    protected string $nome;

    /** @throws PessoaException */
    public function __construct(Cpf $cpf, string $nome)
    {
        $this->validarNome($nome);

        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function cpf(): string
    {
        return $this->cpf;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    /** @throws PessoaException */
    protected function validarNome(string $nome): void
    {
        if (empty($nome)) {
            throw new PessoaException('Informe um nome válido!');
        }

        if (mb_strlen($nome) < 5) {
            throw new PessoaException('Informe um nome com pelo menos 5 caracteres!');
        }
    }
}