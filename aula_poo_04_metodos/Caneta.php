<?php

class Caneta
{

  private $modelo;
  private $cor;
  private $ponta;
  private $tampada;

  public function Caneta($m, $c, $p)
  {
    $this->modelo = $m;
    $this->cor = $c;
    $this->ponta = $p;
    $this->tampar();
  }
  
  public function getModelo()
  {
    return $this->modelo;
  }

  public function setModelo($modelo)
  {
    $this->modelo = $modelo;

    return $this;
  }

  public function getCor()
  {
    return $this->cor;
  }


  public function setCor($cor)
  {
    $this->cor = $cor;

    return $this;
  }

  public function getPonta()
  {
    return $this->ponta;
  }

  public function setPonta($ponta)
  {
    $this->ponta = $ponta;

    return $this;
  }

  public function rabiscar()
  {
    if ($this->tampada) {
      echo "<p><span class='foco'>Erro!</span> Não posso rabiscar tampada!</p>";
    } else {
      echo "<p>Estou rabiscando...</p>";
    }
  }

  public function tampar()
  {
    $this->tampada = true;
  }

  public function destampar()
  {
    $this->tampada = false;
  }
}
