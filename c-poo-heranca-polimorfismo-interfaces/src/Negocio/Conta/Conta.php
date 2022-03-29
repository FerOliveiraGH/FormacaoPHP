<?php

namespace Banco\Negocio\Conta;

use Banco\Negocio\Conta\Exceptions\ContaException;

abstract class Conta
{
    private Titular $cliente;
    protected float $saldo;

    private static int $totalContas = 0;
    private static int $codigoBanco = 125;

    public function __construct(Titular $cliente, float $saldo = 0)
    {
        $this->cliente = $cliente;
        $this->saldo = $saldo;

        self::$totalContas++;
    }

    public function __destruct()
    {
        self::$totalContas--;
    }

    public function __toString(): string
    {
        return $this->cliente->nome() . ' - ' . $this->cliente->cpf()
            . ' - Saldo: R$ ' . number_format($this->saldo, 2, ',', '');
    }

    /** @throws ContaException */
    public function sacar(float $valor): void
    {
        $this->validarValor($valor);

        $valorSaque = $valor + $this->tarifaSaque($valor);

        $this->validarSaldo($valorSaque);

        $this->saldo -= $valorSaque;
    }

    /** @throws ContaException */
    public function depositar(float $valor): void
    {
        $this->validarValor($valor);

        $this->saldo += $valor;
    }

    public static function totalContas(): int
    {
        return self::$totalContas;
    }

    public static function codigoBanco(): int
    {
        return self::$codigoBanco;
    }

    abstract protected function tarifaSaque(float $valor): float;

    /** @throws ContaException */
    protected function validarValor(float $valor): void
    {
        if ($valor <= 0) {
            throw new ContaException('Informe um valor válido!');
        }
    }

    /** @throws ContaException */
    protected function validarSaldo(float $valor): void
    {
        if ($this->saldo < $valor) {
            throw new ContaException('Saldo indisponível!');
        }
    }
}