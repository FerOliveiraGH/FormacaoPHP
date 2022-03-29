<?php

namespace Banco\Negocio\Conta;

use Banco\Negocio\Conta\Exceptions\ContaException;

class ContaCorrente extends Conta
{
    /** @throws ContaException */
    public function transferir(float $valor, Conta $destino): void
    {
        $this->validarValor($valor);
        $this->validarSaldo($valor);

        $this->sacar($valor);
        $destino->depositar($valor);
    }

    protected function tarifaSaque(float $valor): float
    {
        return $valor * 0.05;
    }
}