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
     $e = isset($_GET["e"]) ? $_GET["e"] : 0;
     switch($e) {
      case "PR":
      case "SC":
      case "RS":
        $regiao = "Região Sul";
        break;
      case "GO":
      case "MT":
      case "MS":
      case "DF":
        $regiao = "Região Centro-Oeste";
        break;
      case "SP":
      case "RJ":
      case "ES":
      case "MG":
        $regiao = "Região Sudeste";
        break;
      case "AC":
      case "AM":
      case "AP":
      case "PA":
      case "RR":
      case "RO":
      case "TO":
        $regiao = "Região Norte";
        break;
      default:
        $regiao = "Regiao Nordeste";
     }
     echo "Você mora na <span class='foco'>$regiao</span>";
    ?>
    <br>
    <a href="javascript:history.go(-1)"><button class="botao">Voltar</button></a>
  </div>
</body>
</html>