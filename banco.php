<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaCorrente;

$endereco = new Endereco('Curitiba', 'Jardim das Americas', 'R. Prof Joao Doetzer', '873');
$ricardo = new Titular(new CPF('123.456.789-10'), 'Ricardo Ferreira', $endereco);
$primeiraConta = new ContaCorrente($ricardo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo "Nome: " . $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo "CPF: ". $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo "Saldo: R$ " . $primeiraConta->recuperaSaldo() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();
