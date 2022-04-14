<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
  <title>Arrays</title>
</head>
<body>
  <div>
    <pre>
      <table border="1">
      <?php

        // print("array: ");
        // $n = array(3, 5, 8, 2);
        // $n[] = 7;
        // print_r($n);

        // print("Range: ");
        // $c = range(5, 20, 2);
        // foreach($c as $valor) {
        //   print("<td>$valor</td>");
        // }

        // $v = array(3 => 5,
        //            1 => 9,
        //            0 => 8,
        //            7 => 7);
        // $v[] = "E";
        // unset($v[0]);
        // print_r($v);

        $array = array( "nome" => "Ana",
                    "idade" => 23,
                    "peso" => 78.5);
        $array["fuma"] = true;
        foreach($array as $chave => $valor) {
          echo "<tr><td>$chave</td><td>$valor</td></tr>";
        }
      ?>
      </table>
    </pre>
    <br>
  </div>
</body>
</html>