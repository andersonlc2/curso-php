<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Operadores Lógicos</title>
</head>
<body>
  <div>
    <?php
      $ano = $_GET["a"];
      $idade = 2022 - $ano;
      echo "Quem nasceu em $ano tem a idade de $idade anos";
      echo "<br>";
      $tipo = ($idade>=18 && $idade<65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";

      echo "Dessa forma seu voto é $tipo";
    ?>
  </div>
</body>
</html>