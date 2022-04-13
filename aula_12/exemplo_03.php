<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Tabuada</title>
  </style>
</head>
<body>
  <div>
    <form method="get" action="exemplo_03_02.php">
      <label for="tab">Número: </label>
      <select name="num" id="tab">
        <?php
          $c = 1;
          while ($c <= 10) {
            echo "<option value='$c'>$c</option>";
            $c ++;
          }
        ?>
      </select>
      <input class="botao" type="submit" value="Tabuada" />
    </form>
  </div>
</body>
</html>