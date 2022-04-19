<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Aula 13 - POO</title>
</head>

<body>
  <div>
    <pre>
    <?php
      require_once "Mamifero.php";
      require_once "Lobo.php";
      require_once "Cachorro.php";

      $m = new Mamifero();
      $l = new Lobo();
      $c = new Cachorro();

      $m->emitirSom();
      $l->emitirSom();
      $c->emitirSom();
    ?>
    </pre>
    <br>
  </div>
</body>

</html>