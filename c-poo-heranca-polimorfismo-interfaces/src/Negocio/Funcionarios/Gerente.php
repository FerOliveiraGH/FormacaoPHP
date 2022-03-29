<?php

namespace Banco\Negocio\Funcionarios;

use Banco\Servicos\Autenticador;
use Banco\Servicos\FuncionarioToString;

class Gerente extends Funcionario implements Autenticador
{
    use FuncionarioToString;

    private int $autenticado = 0;

    public function calculaBonificacao(): float
    {
        return $this->salario();
    }

    public function autenticar(string $senha): int
    {
        if ($senha == '4567') {
            $this->autenticado = 1;
        }

        return $this->autenticado;
    }
}