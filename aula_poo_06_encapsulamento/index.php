<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Aula 06 - POO</title>
</head>

<body>
  <div>
    <pre>
    <?php
    require_once "ControleRemoto.php";

    $c = new ControleRemoto();
    $c->ligar();
    $c->maisVolume();
    $c->abrirMenu();
    ?>
    </pre>
    <br>
  </div>
</body>

</html>