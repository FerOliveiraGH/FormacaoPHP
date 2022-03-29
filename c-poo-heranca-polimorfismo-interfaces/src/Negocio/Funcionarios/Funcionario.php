<?php

namespace Banco\Negocio\Funcionarios;

use Banco\Negocio\Cpf;
use Banco\Negocio\Exceptions\FuncionarioException;
use Banco\Negocio\Exceptions\PessoaException;
use Banco\Negocio\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    /** @throws PessoaException */
    public function __construct(Cpf $cpf, string $nome, float $salario)
    {
        parent::__construct($cpf, $nome);
        $this->salario = $salario;
    }

    public function salario(): float
    {
        return $this->salario;
    }

    /** @throws PessoaException */
    public function alterarNome(string $nome)
    {
        $this->validarNome($nome);

        $this->nome = $nome;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario() * 0.01;
    }

    public function receberAumento(float $valor): void
    {
        if ($valor <= 0) {
            throw new FuncionarioException('Informe um valor válido.');
        }

        $this->salario += $valor;
    }
}