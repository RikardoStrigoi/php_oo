<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
  public function  __construct(float $valorSaque, float $saldoAtual)
  {
    $mensagem = "Você tentou sacar $valorSaque, porém, o saldo disponível é: $saldoAtual .";
    parent::__construct($mensagem);
  }
}
