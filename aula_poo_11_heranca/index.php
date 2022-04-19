<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Aula 11 - POO</title>
</head>

<body>
  <div>
    <pre>
    <?php
    require_once "Visitante.php";
    require_once "Aluno.php";
    require_once "Bolsista.php";
    require_once "Tecnico.php";
    require_once "Professor.php";

    $v1 = new Visitante();
    $v1->setNome("Vistante João");
    $v1->setIdade(32);
    $v1->setSexo("M");
    print_r($v1);

    $a1 = new Aluno();
    $a1->setNome("Pedro");
    $a1->setMatricula(11111);
    $a1->setIdade(16);
    $a1->setSexo("M");
    $a1->setCurso("Informática");
    print_r($a1);
    $a1->pagarMensalidade();

    $b1 = new Bolsista();
    $b1->setNome("Jubileu");
    $b1->setMatricula(11112);
    $b1->setIdade(18);
    $b1->setSexo("M");
    $b1->setCurso("Informática");
    $b1->setBolsa(12.5);
    print_r($b1);
    $b1->pagarMensalidade();
    $b1->renovarBolsa();

    $t1 = new Tecnico();
    $t1->setNome("Jubileu");
    $t1->setMatricula(11112);
    $t1->setIdade(18);
    $t1->setSexo("M");
    $t1->setCurso("Informática");
    $t1->setRegistroProfissional(153415);
    print_r($t1);
    $t1->pagarMensalidade();
    $t1->praticar();

    $p1 = new Professor();
    $p1->setNome("Pedro");
    $p1->setIdade(16);
    $p1->setSexo("M");
    $p1->setEspecialidade("TI");
    $p1->setSalario(2500.0);
    print_r($p1);
    $p1->receberSalario();
    ?>
    </pre>
    <br>
  </div>
</body>

</html>