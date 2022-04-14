<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Funções</title>
</head>
<body>
  <div>
    <?php
      // Incluir (não quebra a aplicação)
      // include_once "funcoes.php" // Só carrega se o arquivo não estiver presente
      // include "funcoes.php";
      // O arquivo requerido é obrigatório
      require "funcoes.php";
      echo "<h1>Testando novas funções</h1>";
      ola();
      mostraValor(4);
    ?>
    <br>
  </div>
</body>
</html>