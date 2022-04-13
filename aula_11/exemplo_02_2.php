<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Estruturas Condicionais</title>
  </style>
</head>
<body>
  <div>
  <?php
    // Cria as váriaveis com os parametros passados na url
    $i = 1;
    while($i<=5) {
      $v = "num".$i;
      $url = "v".$i;
      $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
      $i++;
    }
    // Exibe os valores usando o valor das variáveis como variáveis
    $i = 1;
    while($i<=5){
      $v = "num".$i;
      echo "valor $i: ".$$v."<br/>";
      $i++;
    }
    ?>
    <br />
    <a href="javascript:history.go(-1)"><button class="botao">Voltar</button></a>
  </div>
</body>
</html>