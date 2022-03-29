<?php

require 'ContaException.php';

class Conta
{
    private Cliente $cliente;
    private float $saldo;

    private static int $totalContas = 0;
    private static int $codigoBanco = 125;

    public function __construct(Cliente $cliente, float $saldo = 0)
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
        return $this->cliente->nome() . ' - ' . $this->cliente->cpf() . ' - Saldo: ' . $this->saldo;
    }

    /** @throws ContaException */
    public function sacar(float $valor): void
    {
        $this->validarValor($valor);
        $this->validarSaldo($valor);

        $this->saldo -= $valor;
    }

    /** @throws ContaException */
    public function depositar(float $valor): void
    {
        $this->validarValor($valor);

        $this->saldo += $valor;
    }

    /** @throws ContaException */
    public function transferir(float $valor, Conta $destino): void
    {
        $this->validarValor($valor);
        $this->validarSaldo($valor);

        $this->sacar($valor);
        $destino->depositar($valor);
    }

    public static function totalContas(): int
    {
        return self::$totalContas;
    }

    public static function codigoBanco(): int
    {
        return self::$codigoBanco;
    }

    /** @throws ContaException */
    private function validarValor(float $valor): void
    {
        if ($valor <= 0) {
            throw new ContaException('Informe um valor válido!');
        }
    }

    /** @throws ContaException */
    private function validarSaldo(float $valor): void
    {
        if ($this->saldo < $valor) {
            throw new ContaException('Saldo indisponível!');
        }
    }
}