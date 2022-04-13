<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Do while</title>
</head>
<body>
  <div>
    <?php
     $c = 1;
     do {
      echo $c."<br />";
      $c ++;
     } while ($c <= 10); 
     echo "<br />";
     $c = 10;
     do {
       echo $c."<br />";
       $c --;
     } while ($c >= 1);
    ?>
    <br>
  </div>
</body>
</html>