<?php

function mensagem(int $cpf, array $conta): string
{
    return $cpf . ' - ' . $conta['nome'] . ' - ' . $conta['saldo'] . PHP_EOL;
}

function sacar(array &$conta, float $valor): array
{
    if ($conta['saldo'] < $valor) {
        throw new \DomainException('Saldo insuficiente!');
    }

    $conta['saldo'] -= $valor;

    return $conta;
}

function depositar(array &$conta, float $valor): array
{
    if (!$valor > 0) {
        throw new \DomainException('Informe um valor válido!');
    }

    $conta['saldo'] += $valor;

    return $conta;
}

function formartarNomeTitular(array &$conta): array
{
    $conta['nome'] = mb_strtoupper($conta['nome']);

    return $conta;
}