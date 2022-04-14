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
       
       <?php
         print("Array <br/>");
         $n = array("A", "J", "M", "X", "K");

         $n[] = "O"; // Adiciona elemento
         unset($n[5]); // Elimina o ultimo


         // Formatos pilha
         array_push($n,"O"); // Adiciona elemento no fim da coleção.
         array_pop($n);      // Elimina o ultimo elemento da coleção.

         //
         array_unshift($n, "P"); // Adiciona elemento no início da coleção.
         array_shift($n); // Elimina o primeito elemento da coleção.

         foreach ($n as $valor) {
           echo "$valor <br/>";
         }
         echo "<br>";

         print_r($n); // Imprime qualquer objeto de seja uma coleção.
         echo "<br>";

         var_dump($n); // Imprime qualquer variável.
         echo "<br>";

         echo count($n); // length
         echo "<br>";
         echo "<br>";

         sort($n); // Ordena uma coleção.
         print_r($n);
         echo "<br>";

         rsort($n); // Ordena uma coleção desc.
         print_r($n);
         echo "<br>";

         asort($n); // Ordena mantendo os índices originais. Podemos usar arsort($n);
         print_r($n);
         echo "<br>";

         ksort($n); // Ordena por índices cres;
         krsort($n); // Ordena por índices desc;
       ?>
     
     </pre>
    <br>
  </div>
</body>
</html>