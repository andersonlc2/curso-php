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
    <form method="get" action="exemplo_02_2.php">
      <?php
        $c = 1;
        while ($c <= 5) {
          echo "
            <label for='num$c'>Valor $c: </label> 
            <input type='number' name='v$c' id='num$c' min='0' max='100' value='0'/> <br />
          ";
          $c++;
        }


      ?>
      <a href="javascript:history.go(-1)"><button class="botao">Voltar</button></a>
    </form>
  </div>
</body>
</html>