<?php

namespace Banco\Servicos;

trait FuncionarioToString
{
    public function __toString()
    {
        return $this->nome() . ' - ' . $this->salario() . ' - Autenticado: ' . ($this->autenticado ?? 0);
    }
}