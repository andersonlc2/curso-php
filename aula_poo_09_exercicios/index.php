<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Aula 09 - POO</title>
</head>

<body>
  <div>
    <pre>
    <?php
    require_once "Pessoa.php";
    require_once "Livro.php";

    $p1 = new Pessoa("Maria", 15, "F");
    $l1 = new Livro("Senhor dos Aneis", "J. R. R. Tolkien", 1200, 0, $p1);
    $l2 = new Livro("A cabana", "William P. Young", 960, 0, $p1);

    $l1->detalhes();
    $l1->abrir();
    $l1->avancarPag();
    $l1->folhear(120);
    $l1->avancarPag();
    $l1->avancarPag();
    $l1->fechar();
    $l1->abrir();
    $l1->voltarPag();
    print_r($l1);

    ?>
    </pre>
    <br>
  </div>
</body>

</html>