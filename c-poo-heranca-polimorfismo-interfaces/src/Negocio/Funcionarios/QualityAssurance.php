<?php

namespace Banco\Negocio\Funcionarios;

use Banco\Servicos\Autenticador;
use Banco\Servicos\FuncionarioToString;

class QualityAssurance extends Funcionario implements Autenticador
{
    use FuncionarioToString;

    private int $autenticado = 0;

    public function calculaBonificacao(): float
    {
        return $this->salario() * 0.05;
    }

    public function autenticar(string $senha): int
    {
        if ($senha == '1234') {
            $this->autenticado = 1;
        }

        return $this->autenticado;
    }
}