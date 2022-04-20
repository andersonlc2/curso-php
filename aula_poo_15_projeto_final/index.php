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
      require_once "Visualizacao.php";

      $videos[0] = new Video("Aula 1 de POO");
      $videos[1] = new Video("Aula 12 de PHP");
      $videos[2] = new Video("Aula 15 de HTML5");

      $g[0] = new Gafanhoto("Jubileu", 22, "M","Juba");
      $g[1] = new Gafanhoto("Creuza", 18, "F", "Creuzita");

      $vis[0] = new Visualizacao($g[0], $videos[0]);
      $vis[0]->avaliar();
      $vis[1] = new Visualizacao($g[0], $videos[1]);
      $vis[1]->avaliarPorc(85);


      var_dump($videos);
      var_dump($g);
      var_dump($vis);

    ?>
    </pre>
    <br>
  </div>
</body>

</html>