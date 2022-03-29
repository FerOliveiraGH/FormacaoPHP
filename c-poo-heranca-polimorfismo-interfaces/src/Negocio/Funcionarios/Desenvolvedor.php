<?php

namespace Banco\Negocio\Funcionarios;

class Desenvolvedor extends Funcionario
{
    private string $nivel = 'junior';

    public function subirNivel(string $nivel)
    {
        $this->nivel = $nivel;

        if ($this->nivel == 'pleno') {
            $promocao = $this->salario() * 0.10;
        } elseif ($this->nivel == 'senior') {
            $promocao = $this->salario() * 0.20;
        } else {
            $promocao = $this->salario() * 0.05;
        }

        $this->receberAumento($promocao);
    }

    public function nivel(): string
    {
        return $this->nivel;
    }
}