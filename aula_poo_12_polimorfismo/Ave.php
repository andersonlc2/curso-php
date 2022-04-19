<?php

require_once "Ave.php";

class Ave extends Animal
{

  private $corPena;

  public function getCorPena()
  {
    return $this->corPena;
  }

  public function setCorPena($corPena)
  {
    $this->corPena = $corPena;
  }

  public function fazerNinho()
  {
    echo "<p>Contruiu um ninho!</p>";
  }

  public function locomover() {
    echo "<p>Voando</p>";
  }
  
  public function alimentar() {
    echo "<p>Comando frutas</p>";
  }

  public function emitirSom() {
    echo "<p>som de ave</p>";
  }
}