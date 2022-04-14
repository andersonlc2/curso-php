<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>str_repeat</title>
</head>
<body>
  <div>
    <?php
      $frase = "Guanabara";
      $novo = str_repeat($frase, 3);
      print($novo);
    ?>
    <br>
  </div>
</body>
</html>