<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Aula 14 - POO</title>
</head>

<body>
  <div>
    <pre>
    <?php
      require_once "Video.php";
      require_once "Gafanhoto.php";

      $videos[0] = new Video("Aula 1 de POO");
      $videos[1] = new Video("Aula 12 de PHP");
      $videos[2] = new Video("Aula 15 de HTML5");

      $g[0] = new Gafanhoto("Jubileu", 22, "M","Juba");
      $g[1] = new Gafanhoto("Creuza", 18, "F", "Creuzita");

      var_dump($videos);
      var_dump($g);

    ?>
    </pre>
    <br>
  </div>
</body>

</html>