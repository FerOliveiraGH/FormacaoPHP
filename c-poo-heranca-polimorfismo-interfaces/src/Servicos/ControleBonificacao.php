<?php

namespace Banco\Servicos;

use Banco\Negocio\Funcionarios\Funcionario;

class ControleBonificacao
{
    private float $totalBonificacoes = 0;

    public function adicionarBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function totalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}