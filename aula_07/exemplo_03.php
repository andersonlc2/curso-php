<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Calculo de média</title>
</head>
<body>
  <div>
    <?php
      $n1 = $_GET["n1"];
      $n2 = $_GET["n2"];
      $media = ($n1 + $n2) / 2;
      echo "A média do aluno é $media";
      echo "<br>";

      $result = $media > 8 ? "APROVADO" : "REPROVADO";

      echo "Situação do aluno: $result";
    ?>
  </div>
</body>
</html>