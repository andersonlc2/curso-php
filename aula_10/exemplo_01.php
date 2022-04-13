<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Formulário - Sqtr</title>
</head>
<body>
  <div>
    <?php
     $n = isset($_GET["n"]) ? $_GET["n"] : 0;
     $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

     switch($o) {
      case 1:
        $r = $n * 2;
        break;
      case 2: 
        $r = pow($n,3);
        break;
      case 3:
        $r = sqrt($n); // $n ^ (1/2);
     }
     echo "O resultado da operação solicitada foi <span class='foco'>$r</span>";
    ?>
    <br>
    <a href="exemplo_01.html"><button class="botao">Voltar</button></a>
  </div>
</body>
</html>