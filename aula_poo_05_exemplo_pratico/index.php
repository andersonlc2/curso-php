<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Aula 05 - POO</title>
</head>

<body>
  <div>
    <?php
    require_once "Conta.php";

    // Abertuda de uma conta
    $c1 = Conta::abrirConta(153215, "CP", "Jubileu da Silva");
    // Depositando um valor
    $c1->depositar(300);
    // Sacando um valor disponível
    $c1->sacar(50);
    // Sacando um valor disponível
    $c1->sacar(40);
    // Pagamento mensalidade
    $c1->pagarMensal();
    // Encerramento da conta
    Conta::fecharConta($c1);
    // Sacando um valor disponível
    $c1->sacar(348);
    // Encerramento da conta
    Conta::fecharConta($c1);
    // Imprime resultado final da conta
    $c1->toString();

    echo "<br /><hr />";

    // Abertuda de uma conta
    $c2 = Conta::abrirConta(153216, "CC", "Creuza dos Santos");
    // Depositando um valor
    $c2->depositar(500);
    // Sacando um valor maior que o saldo disponível
    $c2->sacar(2000);
    // Sacando um valor disponível
    $c2->sacar(100);
    // Pagamento mensalidade
    $c2->pagarMensal();
    // Encerramento da conta
    Conta::fecharConta($c2);
    // Imprime resultado final da conta
    $c2->toString();

    ?>
    <br>
  </div>
</body>

</html>