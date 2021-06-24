<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\NomeInvalidoException;

require_once 'autoload.php';

try{
  $contaCorrente = new ContaCorrente(
    new Titular(
      new CPF ('123.456.789-10'),
      'Ricardo Ferreira',
      new Endereco('Cidade', 'Bairro', 'Rua', '123')
    )
  );
} catch (InvalidArgumentException | NomeInvalidoException $exception) {
  echo $exception->getMessage() . PHP_EOL;
}

try{
  $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
  echo "Valor a depositar deve ser positivo";
}