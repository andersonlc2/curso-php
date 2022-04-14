<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>printf</title>
</head>
<body>
  <div>
    <?php
      $prod = "leite";
      $preco = 4.5;
      printf("O %s está custando R$ %.2f", $prod, $preco);
    ?>
    <br>
  </div>
</body>
</html>