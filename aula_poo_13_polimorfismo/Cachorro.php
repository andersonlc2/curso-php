<?php

require_once "Lobo.php";

class Cachorro extends Lobo
{
  public function emitirSom()
  {
    echo "<p>Au! Au! Au!</p>";
  }

  // Forma de suprir a falta de sobrecarga no PHP
  public function reagirFrase($frase) {
    
  }

  public function reagirHora($hora, $min) {
    
  }

  public function reagirDono($dono) {

  }

  public function reagirIdade($idade, $peso) {

  }
}