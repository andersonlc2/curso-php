<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Operadores</title>
</head>
<body>
  <div>
    <?php
      $preco = $_GET["p"];
      echo "O preco do produto é R$ ".number_format($preco, 2, ",", ".");
      echo "<br>";
      $preco += $preco*0.1;
      echo "O preço com acréscimo de 10 % será R$ ".number_format($preco, 2, ",", ".");
      echo "<br>";
      $preco -= $preco*0.25;
      echo "O preço com desconto de 25 % será R$ ".number_format($preco, 2, ",", ".");
    ?>
  </div>
</body>
</html>