<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Igual e Idêntico</title>
</head>
<body>
  <div>
    <?php
      $a = 3;
      $b = "3";

      // iguais e do mesmo tipo
      $r = $a === $b ? "SIM" : "NÂO";

      echo "As variável 'a' e 'b' são iguais ? Reposta: $r";
      
    ?>
  </div>
</body>
</html>