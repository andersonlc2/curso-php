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
      $result = 1;
      echo "<h2>Fatorial de $num!</h2>";
      do {
        $result *= $num;
        $sep = $num == 1 ? " " : " x ";
        echo $num.$sep;
        $num --;
      } while($num >= 1);

      echo " = <span class='foco'>$result</span>";
      echo "<br />";    
    ?>
    <a href="javascript:history.go(-1)"><button class="botao">Voltar</button></a>
  </div>
</body>
</html>