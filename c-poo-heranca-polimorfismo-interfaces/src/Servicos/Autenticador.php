<?php

namespace Banco\Servicos;

interface Autenticador
{
    public function autenticar(string $senha): int;
}