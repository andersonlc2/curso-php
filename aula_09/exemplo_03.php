<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php
    $n1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 1;
    $n2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 1;
    $media = ($n1 + $n2) / 2;
    $situacao;

    if ($media < 5) {
      $situacao = "REPROVADO";
      $cor = "#B22222";
    } else if ($media < 7) {
      $situacao = "RECUPERAÇÃO";
      $cor = "#FF8C00";
    } else {
      $situacao = "APROVADO";
      $cor = "#008000";
    }
    
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Formulário - Sqtr</title>
  <style>
    span.nota {
      color: <?php echo $cor; ?>
    }
  </style>
</head>
<body>
  <div>
    <?php
      echo "A média entre <strong>$n1</strong> e <strong>$n2</strong> é igual a <span class='nota'>".number_format($media, 1)."</span>";
      echo "<br />";
      echo "Situação do aluno: <span class='nota'>$situacao</span>";
    ?>
    <br>
    <a href="exemplo_03.html"><button class="botao">Voltar</button></a>
  </div>
</body>
</html>