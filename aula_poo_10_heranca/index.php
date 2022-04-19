<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Aula 10 - POO</title>
</head>

<body>
  <div>
    <pre>
    <?php
    require_once "Pessoa.php";
    require_once "Aluno.php";
    require_once "Professor.php";
    require_once "Funcionario.php";

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome("Pedro");
    $p2->setNome("Maria");
    $p3->setNome("Cláudio");
    $p4->setNome("Fabiana");

    $p2->setCurso("Informática");
    $p3->setSalario(2500.75);
    $p4->setSetor("Estoque");    

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);

    ?>
    </pre>
    <br>
  </div>
</body>

</html>