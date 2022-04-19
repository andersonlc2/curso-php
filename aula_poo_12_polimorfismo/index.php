<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Aula 12 - POO</title>
</head>

<body>
  <div>
    <pre>
    <?php
    require_once "Mamifero.php";
    require_once "Reptil.php";
    require_once "Peixe.php";
    require_once "Ave.php";
    require_once "Canguru.php";
    require_once "Cachorro.php";
    require_once "Cobra.php";
    require_once "Tartaruga.php";
    require_once "GoldFish.php";
    require_once "Arara.php";

    $m = new Mamifero();
    $p = new Peixe();
    $e = new Reptil();
    $a = new Ave();
  
    $c = new Canguru();
    $k = new Cachorro();
    $o = new Cobra();
    $t = new Tartaruga();
    $g = new GoldFish();
    $r = new Arara();

    $c->locomover();
    $k->locomover();
    $o->locomover();
    $t->locomover();
    $g->locomover();
    $r->locomover();


    
    ?>
    </pre>
    <br>
  </div>
</body>

</html>