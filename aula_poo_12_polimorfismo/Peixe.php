<?php

require_once "Animal.php";

class Peixe extends Animal 
{

  private $corEscama;
  
  public function getCorEscama()
  {
    return $this->corEscama;
  }

  public function setCorEscama($corEscama)
  {
    $this->corEscama = $corEscama;
  }

  public function soltarBolha()
  {
    echo "<p>Soltou uma bolha</p>";
  }

  public function locomover() {
    echo "<p>Nadando</p>";
  }
  
  public function alimentar() {
    echo "<p>Comendo substancias</p>";
  }

  public function emitirSom() {
    echo "<p>Peixe não faz som</p>";
  }
}