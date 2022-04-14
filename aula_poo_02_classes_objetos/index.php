<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Aula 02 - POO</title>
</head>
<body>
  <div>    
       <?php
        require_once "Caneta.php";

        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        print_r($c1);
        $c1->tampar();
        $c1->destampar();
        $c1->rabiscar();
        
        $c2 = new Caneta;
        $c2->cor = "Verde";
        $c2->ponta = 0.7;
        $c2->tampar();
        print_r($c2);
        $c2->rabiscar();
        
       ?>
    <br>
  </div>
</body>
</html>