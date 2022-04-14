<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>strpos e stripos</title>
</head>
<body>
  <div>
    <?php
      $frase = "Estou aprendendo PHP";
      $pos = strpos($frase, "PHP");
      print($pos);
      print("<br/>");
      $ipos = stripos($frase, "php");
      print($ipos);
    ?>
    <br>
  </div>
</body>
</html>