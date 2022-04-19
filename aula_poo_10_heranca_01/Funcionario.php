<?php

require_once "Pessoa.php";

class Funcionario extends Pessoa
{

  private $setor;
  private $trabalho;

  public function getSetor()
  {
    return $this->setor;
  }

  public function setSetor($setor)
  {
    $this->setor = $setor;
  }

  public function getTrabalho()
  {
    return $this->trabalho;
  }

  public function setTrabalho($trabalho)
  {
    $this->trabalho = $trabalho;
  }

  public function mudarTrabalho($cargo)
  {
    $this->trabalho = $cargo;
  }
}