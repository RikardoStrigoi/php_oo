<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor('João da Silva', new CPF('357.654.954-15'), 10000);

$autenticador->tentaLogin($umDiretor, '1234');