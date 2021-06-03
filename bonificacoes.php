<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor('Ricardo Ferreira', new CPF('654.321.987-10'), 'Desenvolvedor', 1000);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente('Patricia', new CPF('321.987.654-15'), 'Gerente', 3000);

$umDiretor = new Diretor('Ana Paula', new CPF('987.654.321-65'), 'Diretor', 5000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);
$controlador->adicionaBonificacao($umDiretor);

echo $controlador->recuperaTotal();