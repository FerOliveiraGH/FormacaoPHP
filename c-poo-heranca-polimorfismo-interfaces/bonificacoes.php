<?php


use Banco\Negocio\Funcionarios\Desenvolvedor;
use Banco\Negocio\Cpf;
use Banco\Negocio\Funcionarios\QualityAssurance;
use Banco\Servicos\ControleBonificacao;

require_once 'autoload.php';

$funcionarioFernando = new Desenvolvedor(new Cpf('123.456.789-10'),'Fernando Oliveira', 15000);
$funcionarioFulano = new QualityAssurance(new Cpf('123.456.789-10'),'Fulano da Silva', 20000);

$funcionarioFernando->subirNivel('senior');

print($funcionarioFernando->nivel() . PHP_EOL);

$controleBonificacoes = new ControleBonificacao();

$controleBonificacoes->adicionarBonificacao($funcionarioFernando);
print($controleBonificacoes->totalBonificacoes() . PHP_EOL);

$controleBonificacoes->adicionarBonificacao($funcionarioFulano);
print($controleBonificacoes->totalBonificacoes() . PHP_EOL);
