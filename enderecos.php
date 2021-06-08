<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Curitiba', 'Uberaba', 'R. Dez', '123');
$outroEndereco = new Endereco('São José dos Pinhais', 'Centro', 'R. Vinte', '321');

echo $umEndereco . PHP_EOL;
$umEndereco->bairro = 'Jardim das Americas';
echo $umEndereco->bairro . PHP_EOL;

echo $umEndereco . PHP_EOL;
echo $outroEndereco;