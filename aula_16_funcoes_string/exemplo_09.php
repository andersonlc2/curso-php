<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>implode ou join</title>
</head>
<body>
  <div>
    <?php
      $vetor[0] = "Curso";
      $vetor[1] = "em";
      $vetor[2] = "Video";
      $texto = implode("#", $vetor); // join() -> funciona da mesma forma
      print($texto);
    ?>
    <br>
  </div>
</body>
</html>