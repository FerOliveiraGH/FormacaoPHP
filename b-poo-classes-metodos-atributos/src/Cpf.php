<?php

require 'CpfException.php';

class Cpf
{
    private string $numero;

    /** @throws CpfException */
    public function __construct(string $numero)
    {
        $this->validarCpf($numero);

        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return $this->numero;
    }

    /** @throws CpfException */
    private function validarCpf(string $numero): void
    {
        if (empty($numero)) {
            throw new CpfException('Informe um CPF válido!');
        }
    }
}