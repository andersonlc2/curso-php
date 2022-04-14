<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>ucfirst e ucwords</title>
</head>
<body>
  <div>
    <?php
      $nome = "gustavo guanabara";
      $uc = ucfirst($nome);
      print($uc);
      print("<br/>");
      $ucw = ucwords($nome);
      print($ucw);
    ?>
    <br>
  </div>
</body>
</html>