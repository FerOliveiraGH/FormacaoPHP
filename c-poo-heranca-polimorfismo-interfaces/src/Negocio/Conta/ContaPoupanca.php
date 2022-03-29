<?php

namespace Banco\Negocio\Conta;

class ContaPoupanca extends Conta
{
    protected function tarifaSaque(float $valor): float
    {
        return $valor * 0.03;
    }
}