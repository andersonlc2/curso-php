<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>var_dump</title>
</head>
<body>
  <div>
    <?php
      $v[0] = 4;
      $v[1] = 8;
      $v[2] = 3;
      print_r($v);
      echo "<br />";
      var_dump($v);
      echo "<br />";
      var_export($v);

      echo "<br />";

      $v2 = array (3, 7, 6, 2, 1, 9);
      print_r($v2);
    ?>
    <br>
  </div>
</body>
</html>