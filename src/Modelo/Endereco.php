<?php

namespace Alura\Banco\Modelo;

final class Endereco
{
  private string $cidade;
  private string $bairro;
  private string $rua;
  private string $numero;

  public function __construct(string $cidade, string $bairro, string $rua, string $numero)
  {
    $this->cidade = $cidade;
    $this->bairro = $bairro;
    $this->rua = $rua;
    $this->numero = $numero;
  }

  public function recuperaCidade(): string
  {
    return $this->cidade;
  }

  public function recuperaBairro(): string
  {
    return $this->bairro;
  }

  public function recuperaRua(): string
  {
    return $this->rua;
  }

  public function recuperaNumero(): string
  {
    return $this->numero;
  }

  public function __toString(): string
  {
    return "{$this->rua}, {$this-> numero}, {$this->bairro}, {$this->cidade}";
  }

  public function __get(string $nomeAtributo)
  {
    $metodo = 'recupera' . ucfirst($nomeAtributo);
    return $this->$metodo();
  }

  public function __set(string $name, $value)
  {
    echo "Alterando '$name' para '$value'\n";
    $this->$name = $value;
  }
}


