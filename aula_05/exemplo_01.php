<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Operações Aritméticas</title>
</head>
<body>
  <div>
    <?php
      $n1 = $_GET["a"];
      $n2 = $_GET["b"];

      echo "<h2>Valores recebidos: $n1 e $n2</h2>";

      $media = ($n1 + $n2) / 2;

      echo "A soma vale ".($n1 + $n2);
      echo "<br>";
      echo "A subtração vale ".($n1 - $n2);
      echo "<br>";
      echo "A multipicação vale ".($n1 * $n2);
      echo "<br>";
      echo "A divisão vale ".($n1 / $n2);
      echo "<br>";
      echo "O módulo vale ".($n1 % $n2);
      echo "<br>";
      echo "O média vale $media";
    ?>
  </div>
</body>
</html>