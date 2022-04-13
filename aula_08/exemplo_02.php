<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Formulário - Idade</title>
</head>
<body>
  <div style="display: flex; flex-direction: column; justify-content: space-between;">
    <?php
      $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
      $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
      $idade = date("Y") - $ano;
      $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
      
      echo "$nome é $sexo e tem $idade anos.";
    ?>
    <br />
    <a href="exemplo_02.html">Voltar</a>
  </div>
</body>
</html>