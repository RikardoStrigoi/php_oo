<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$ricardo = new Titular(new CPF('123.456.789-10'), 'Ricardo Ferreira');
$primeiraConta = new Conta($ricardo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo "Nome: " . $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo "CPF: ". $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo "Saldo: R$ " . $primeiraConta->recuperaSaldo() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();
