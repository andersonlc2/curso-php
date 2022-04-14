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
      function soma() {
        $vetor_parametros = func_get_args();
        $total_parametros = func_num_args();
        $soma = 0;
        for ($i = 0; $i < $total_parametros; $i ++) {
          $soma += $vetor_parametros[$i];
        }
        return $soma;
      }

      $r = soma(3, 10, 9, 1, 7, 70);
      echo "A soma total dos parametros é igual a <span class='foco'>$r</span>";
    ?>
    <br>
  </div>
</body>
</html>