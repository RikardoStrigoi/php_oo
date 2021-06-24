<?php

namespace Alura\Banco\Modelo\Funcionario;

class NomeInvalidoException extends \DomainException
{
  public function  __construct(string $nome)
  {
    $mensagem = "Nome $nome inválido";
    parent::__construct($mensagem);
  }
}
