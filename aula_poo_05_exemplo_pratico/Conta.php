<?php

class Conta
{
  private $numConta;
  private $tipo;
  private $dono;
  private $saldo;
  private $status;

  public function Conta($num, $tipo, $dono)
  {
    $this->numConta = $num;
    $this->tipo = $tipo;
    $this->dono = $dono;
    $this->status = false;
  }

  public function getNumConta()
  {
    return $this->numConta;
  }

  public function setNumConta($numConta)
  {
    $this->numConta = $numConta;
  }

  public function getTipo()
  {
    return $this->tipo;
  }

  public function setTipo($tipo)
  {
    $this->tipo = $tipo;
  }

  public function getDono()
  {
    return $this->dono;
  }

  public function setDono($dono)
  {
    $this->dono = $dono;
  }

  public function getSaldo()
  {
    return $this->saldo;
  }

  public function setSaldo($saldo)
  {
    $this->saldo = $saldo;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public static function abrirConta($num, $tipo, $dono)
  {
    $c = new Conta($num, $tipo, $dono);
    $c->setSaldo($c->getTipo() == "CC" ? 50 : 150);
    $c->setStatus(true);
    echo "<p>Conta aberta:</p>";
    $c->toString();
    return $c;
  }

  public static function fecharConta(&$c)
  {
    if (!$c->getStatus()) {
      echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
      echo " - <span class='foco'>A conta solicitada é inativa!</span></p>";
      return null;
    }
    if ($c->getSaldo() > 0) {
      echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
      echo " - <span class='foco'>Erro no encerramento!</span> Realize o saque do valor positivo antes.</p>";
      return null;
    }
    if ($c->getSaldo() < 0) {
      echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
      echo " - <span class='foco'>Erro no encerramento!</span> Realize a quitação dos débitos antes.</p>";
      return null;
    }
    $c->setStatus(false);
    echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
    echo " - A conta de número <strong>{$c->getNumConta()}</strong> foi encerrada.</p>";
  }

  public function depositar($valor)
  {
    if (!$this->getStatus()) {
      echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
      echo " - <span class='foco'>A conta solicitada é inativa!.</span></p>";
      return null;
    }
    $s = $this->getSaldo();
    $this->setSaldo($s += $valor);
    echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
    printf(" - Deposito no valor de <span class='foco'>R$ %.2f</span> foi realizado.</p>", $valor);
    printf("<p>-> Saldo atualizado: <span class='foco'>R$ %.2f</span></p>", $this->getSaldo());
  }

  public function sacar($valor)
  {
    if (!$this->getStatus()) {
      echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
      echo " - <span class='foco'>A conta solicitada é inativa!.</span></p>";
      return null;
    }
    if ($valor <= $this->getSaldo()) {
      $s = $this->getSaldo();
      $this->setSaldo($s -= $valor);
      echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
      printf(" - Saque no valor de <span class='foco'>R$ %.2f</span> foi realizado.</p>", $valor);
    } else {
      echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
      printf(" - <span class='foco'>Você não tem saldo disponível no valor de R$ %0.2f</span></p>", $valor);
    }
    printf("<p>-> Saldo atualizado: <span class='foco'>R$ %.2f</span></p>", $this->getSaldo());
  }

  public function pagarMensal()
  {
    if (!$this->getStatus()) {
      echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
      echo " - <span class='foco'>A conta solicitada é inativa!.</span></p>";
      return null;
    }
    if ($this->getTipo() == "CC") {
      if (20 <= $this->getSaldo()) {
        $s = $this->getSaldo();
        $this->setSaldo($s -= 20);
        echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
        printf(" - A mensalidade no valor de <span class='foco'>R$ 20.00</span> foi paga.</p>");
      } else {
        echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
        printf(" - <span class='foco'>Você não tem saldo disponível!</span></p>");
      }
      printf("<p>-> Saldo atualizado: <span class='foco'>R$ %.2f</span></p>", $this->getSaldo());
    } else {
      if (12 <= $this->getSaldo()) {
        $s = $this->getSaldo();
        $this->setSaldo($s -= 12);
        echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
        printf(" - A mensalidade no valor de <span class='foco'>R$ 12.00</span> foi paga.</p>");
      } else {
        echo "<p><small>" . date("d/m/y H:i:s") . "</small>";
        printf(" - <span class='foco'>Você não tem saldo disponível!</span></p>");
      }
      printf("<p>-> Saldo atualizado: <span class='foco'>R$ %.2f</span></p>", $this->getSaldo());
    }
  }

  public function toString()
  {
    echo "<table border=1>";
    echo "<tr>
      <td>Numero</td>
      <td>tipo</td>
      <td>Titular</td>
      <td>Saldo</td>
      <td>Ativo</td>
    </tr>";
    echo "<tr> 
      <td>{$this->getNumConta()}</td>
      <td>{$this->getTipo()}</td>
      <td>{$this->getDono()}</td>
      <td>{$this->getSaldo()}</td>
      <td>{$this->getStatus()}</td>
    </tr>";
    echo "</table>";
  }
}
