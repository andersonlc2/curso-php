<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Fatorial</title>
  </style>
</head>
<body>
  <div>
    <?php 
      $num = isset($_GET["val"]) ? $_GET["val"] : 1;
      $qtd = 0;
      echo "<h2>Analisando o número $num </h2>";
      echo "Valores múltiplos -> [";
      for ($div = 1; $div <= $num; $div ++) {
        if ($num % $div == 0) {
          $qtd ++;
          echo "$div ";
        }
      }
      echo "] <br />";
      echo "Total de múltiplos: $qtd";
      echo "<br />";
      $primo = $qtd == 2 ? "É PRIMO" : "NÃO É PRIMO";
      echo "Resultado: $num <span class='foco'>$primo</span>!";
    ?>
    <br />
    <a href="javascript:history.go(-1)"><button class="botao">Voltar</button></a>
  </div>
</body>
</html>