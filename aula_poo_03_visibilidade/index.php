<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Aula 03 - POO</title>
</head>
<body>
  <div>    
    <pre>
       <?php
        require_once "Caneta.php";

        $c1 = new Caneta;
        $c1->modelo = "BIC Cristal";
        $c1->cor = "Azul";
        $c1->tampar();
        $c1->rabiscar();
        var_dump($c1);

       ?>
    </pre>
    <br>
  </div>
</body>
</html>