<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Tabuada</title>
</head>
<body>
  <div>
    <?php
     $num = isset($_GET["num"]) ? $_GET["num"] : 1;
     echo "<h2>Mostrando a tabuada de <span class='foco'>$num</span>:</h2>";
    ?>
    <table>
      <?php
      $mult = 1;
      do {
      echo "<tr><td>$num x $mult</td>";
      echo "<td> = ".($num*$mult)."</td></tr>";
      $mult ++;
      } while ($mult <= 10 );
    ?>
    </table>
    <br>
    <a href="javascript:history.go(-1)"><button class="botao">Voltar</button></a>
  </div>
</body>
</html>