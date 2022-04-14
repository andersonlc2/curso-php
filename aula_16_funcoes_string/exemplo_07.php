<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>explode</title>
</head>
<body>
  <div>
    <?php
      $site = "Curso em Video";
      $vetor = explode(" ", $site); // similar ao split 
      print_r($vetor);
    ?>
    <br>
  </div>
</body>
</html>