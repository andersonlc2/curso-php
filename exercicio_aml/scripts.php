<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>EXERCÍCIO PHP - Básico</title>
</head>

<body>
  <div>
    <?php
    // 1.)
    // A - Receber dois parâmetros nomeados --> parâmetro number e parâmetro times (que deve ser maior que 1), ambos inteiros;
    $number = isset($_GET["number"]) ? $_GET["number"] : 1;
    $times = isset($_GET["times"]) ? $_GET["times"] : 1;
    echo "<span class='foco'>number</span> = $number <br />";
    echo "<span class='foco'>times</span> = $times";

    // B - Validar se o parâmetro times é maior que um - se for menor que um exibir uma mensagem de erro;
    if ($times < 1) {
      echo "<p>Erro! O parâmetro 'times' deve ser maior que 1</p>";
    }

    // 2.) Na primeira linha apresentar se os parâmetros são pares ou ímpares;
    $number_par = $number % 2 == 0 ? "par" : "impar";
    $times_par = $times % 2 == 0 ? "par" : "impar";
    echo "<p>O parâmetro number é <strong>$number_par</strong> e o parâmetro times é <strong>$times_par</strong></p>";

    // 3.)
    // A - Se o parâmetro number for par, apresentar a multiplicação do parâmetro number até a quantidade de vezes do parâmetro times;
    // B - Se o parâmetro number for ímpar, apresentar a soma do parâmetro number ao parâmetro times de forma decrescente;
    if ($number_par == "par") {
      echo "- Multiplicação: <br />";
      for ($cont = 1; $cont <= $times; $cont++) {
        $mult = $number * $cont;
        echo "$number x $cont = <span class='foco'>$mult</span><br />";
      }
    } else {
      echo "- Soma: <br />";
      for ($cont = $times; $cont >= 0; $cont--) {
        $sum = $number + $cont;
        echo "$number + $cont = <span class='foco'>$sum</span><br />";
      }
    }

    // 4.) Criar um vetor com a tabuada do parâmetro number - apresentar o dump do array (print_r ou var_dump);
    $tab = array();
    for ($cont = 0; $cont <= 10; $cont++) {
      $res = $number * $cont;
      $tab[] = $res;
    }
    echo "<br />- Tabuada do $number: ";
    print_r($tab);
    ?>
    <br>
    <a href="javascript:history.go(-1)"><button class="botao">Voltar</button></a>
  </div>
</body>

</html>