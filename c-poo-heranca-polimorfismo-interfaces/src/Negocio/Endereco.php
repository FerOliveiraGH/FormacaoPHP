<?php

namespace Banco\Negocio;

final class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function cidade(): string
    {
        return $this->cidade;
    }

    public function bairro(): string
    {
        return $this->bairro;
    }

    public function rua(): string
    {
        return $this->rua;
    }

    public function numero(): string
    {
        return $this->numero;
    }
}