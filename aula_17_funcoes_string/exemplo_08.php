<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>replace</title>
</head>
<body>
  <div>
    <?php
      $frase = "Gosto de estudar Matemática!!!";
      $novo = str_replace("Matemática", "PHP", $frase);
      print($novo);
      print("<br/>");
      $inovo = str_ireplace("matemática", "PHP", $frase);
      print($inovo);
    ?>
    <br>
  </div>
</body>
</html>