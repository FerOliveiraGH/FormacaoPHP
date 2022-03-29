<?php

require 'ClienteException.php';

class Cliente
{
    private Cpf $cpf;
    private string $nome;

    /** @throws ClienteException */
    public function __construct(Cpf $cpf, string $nome)
    {
        $this->validarNome($nome);

        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function cpf(): string
    {
        return $this->cpf;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    /** @throws ClienteException */
    private function validarNome(string $nome): void
    {
        if (empty($nome)) {
            throw new ClienteException('Informe um nome válido!');
        }

        if (mb_strlen($nome) < 5) {
            throw new ClienteException('Informe um nome com pelo menos 5 caracteres!');
        }
    }
}