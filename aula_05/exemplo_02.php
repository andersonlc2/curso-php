<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Funções Aritméticas em PHP</title>
</head>
<body>
  <div>
    <?php
      $v1 = $_GET["x"];
      $v2 = $_GET["y"];
      echo "<h3>Valores recebidos: $v1 e $v2 </h3>";

      echo "O valor absoluto de $v2 é ".abs($v2);
      echo "<br>";
      echo "O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);
      echo "<br>";
      echo "A raiz de $v1 é ".sqrt($v1);
      echo "<br>";
      echo "O valor de $v2 arredondado é ".round($v2); // ceil^ floor
      echo "<br>";
      echo "A parte inteira de $v2 é ".intval($v2);
      echo "<br>";
      echo "O valor de $v1 em moeda é ".number_format($v1,2,",",".");
    ?>
  </div>
</body>
</html>