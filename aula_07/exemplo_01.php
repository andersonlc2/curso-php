<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Operador Relacional Ternário</title>
</head>
<body>
  <div>
    <?php
      $a = $_GET["a"];
      $b = $_GET["b"];
      $tipo = $_GET["op"];
      echo "Os valores passados foram $a e $b";
      echo "<br>";
      $r = ($tipo == "s") ? $a+$b : $a*$b;

      echo "O resultado será $r";
    ?>
  </div>
</body>
</html>