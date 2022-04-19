<?php 

require_once "Aluno.php";

class Bolsista extends Aluno
{
  private $bolsa;
  
  public function getBolsa()
  {
    return $this->bolsa;
  }

  public function setBolsa($bolsa)
  {
    $this->bolsa = $bolsa;
  }

  public function renovarBolsa()
  {
    echo "<p>Bolsa renovada!</p>";
  }

  // Não usa override aqui para sobrepor um método
  public function pagarMensalidade()
  {
    echo "<p><strong>{$this->nome}</strong> é bolsista! Então paga com desconto.";
  }
}