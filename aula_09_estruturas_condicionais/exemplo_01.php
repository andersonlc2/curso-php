<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $idade = date("Y") - $ano;
    $votar;
    $dirigir;
    $cor;
    if ($idade >= 18) {
      $votar = "já pode votar";
      $dirigir = "já pode dirigir";
      $cor = "#008000";
    } else {
      $votar = "não pode votar";
      $dirigir = "não pode dirigir";
      $cor = "#B22222";
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
      echo "Você nasceu em $ano logo tem <span class='idade' >$idade anos</span>.";
      echo "<br />";
      echo "Com essa idade você $votar e também $dirigir !";
    ?>
    <br>
    <a href="exemplo_01.html"><button class="botao">Voltar</button></a>
  </div>
</body>
</html>