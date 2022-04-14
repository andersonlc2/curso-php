<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Matrizes</title>
</head>
<body>
  <div>
    <pre>
      <table border="1">
          <?php
            $array = array( array(2,3),
                            array(3,4),
                            array(9,5));

            foreach ($array as $linha) {
              echo "<tr>";
              foreach ($linha as $coluna) {
                echo "<td>";
                echo $coluna;
                echo "</td>";
              }
              echo "</tr>";
            }
          ?>
      </table>
    </pre>
    <br>
  </div>
</body>
</html>