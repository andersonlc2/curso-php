<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Aula 04 - POO</title>
</head>

<body>
  <div>
    <pre>
       <?php
        require_once "Caneta.php";

        $c1 = new Caneta("BIC", "AZUL", 0.5);

        print("<p>Modelo: {$c1->getModelo()}</p>");
        print("<p>Cor: {$c1->getCor()}</p>");
        print("<p>Ponta: {$c1->getPonta()}</p>");

        $c1->destampar();
        $c1->rabiscar();

        var_dump($c1);
        ?>
    </pre>
    <br>
  </div>
</body>

</html>