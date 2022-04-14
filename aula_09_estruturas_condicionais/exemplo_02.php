<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $idade = date("Y") - $ano;
    $voto;
    if ($idade < 16) {
      $voto = "não vota";
      $cor = "#B22222";

    } else if ($idade >= 18 && $idade <= 65) {
      $voto = "voto obrigatório";
      $cor = "#008000";
    } else {
      $voto = "voto opcional";
      $cor = "#FF8C00";
    }
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Formulário - Sqtr</title>
  <style>
    span.idade {
      color: <?php echo $cor; ?>
    }
  </style>
</head>
<body>
  <div>
    <?php
      $s = $idade == 1 ? "ano" :"anos";
      echo "Você nasceu em $ano logo tem <span class='idade' >$idade $s</span>.";
      echo "<br />";
      echo "Situação: <span class='idade' >$voto</span>.";
    ?>
    <br>
    <a href="exemplo_02.html"><button class="botao">Voltar</button></a>
  </div>
</body>
</html>