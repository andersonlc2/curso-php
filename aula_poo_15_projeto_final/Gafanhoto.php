<?php

require_once "Pessoa.php";

class Gafanhoto extends Pessoa {

  private $gafanhoto;
  private $totAssistido;

  public function Gafanhoto($nome, $idade, $sexo, $login) {
    parent::Pessoa($nome, $idade, $sexo);
    $this->gafanhoto = $login;
    $this->totAssistido = 0;
  }
  
  public function getGafanhoto()
  {
    return $this->gafanhoto;
  }

  public function setGafanhoto($gafanhoto)
  {
    $this->gafanhoto = $gafanhoto;
  }

  public function getTotAssistido()
  {
    return $this->totAssistido;
  }

  public function setTotAssistido($totAssistido)
  {
    $this->totAssistido = $totAssistido;
  }

  public function viuMaisUm()
  {
    $this->totAssistido++;
  }

}