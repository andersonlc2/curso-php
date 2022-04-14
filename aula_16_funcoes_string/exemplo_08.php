<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>str_split</title>
</head>
<body>
  <div>
    <?php
      $nome = "Curso em Video";
      $vetor = str_split($nome);
      print_r($vetor);
    ?>
    <br>
  </div>
</body>
</html>