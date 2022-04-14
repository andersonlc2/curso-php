<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>trim</title>
</head>
<body>
  <div>
    <?php
      $nome = "   Jose da Silva   ";
      echo(strlen($nome));
      $novo = trim($nome);
      echo("<br/>");
      echo(strlen($novo));
    ?>
    <br>
  </div>
</body>
</html>