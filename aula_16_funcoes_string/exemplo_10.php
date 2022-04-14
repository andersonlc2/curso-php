<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>chr e ord</title>
</head>
<body>
  <div>
    <?php
      $letra = chr(67);
      echo "A letra de código 67 é <span class='foco'>$letra</span>";

      $outra = "C";
      $cod = ord($outra);
      echo "<br/> O código da letra 'C' é <span class='foco'>$cod</span>";
    ?>
    <br>
  </div>
</body>
</html>