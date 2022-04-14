<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Estrutura While</title>
</head>
<body>
  <div>
    <?php
     $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
     $final = isset($_GET["final"]) ? $_GET["final"] : 0;
     $incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 1;

     if ($inicio < $final) {
       echo "[";
       while ($inicio <= $final) {
         $sep = $inicio == $final ? "":", ";
         echo "$inicio$sep";
         $inicio += $incremento;
       }
       echo "]";
     } else {
      echo "[";
      while ($inicio >= $final) {
        $sep = $inicio == $final ? "":", ";
        echo "$inicio$sep";
        $inicio -= $incremento;
      }
      echo "]";
     }
     

    ?>
    <br>
    <a href="javascript:history.go(-1)"><button class="botao">Voltar</button></a>
  </div>
</body>
</html>