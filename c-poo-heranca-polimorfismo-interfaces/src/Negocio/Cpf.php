<?php

namespace Banco\Negocio;

use Banco\Negocio\Exceptions\CpfException;

final class Cpf
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