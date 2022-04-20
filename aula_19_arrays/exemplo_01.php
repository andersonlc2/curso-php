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

         // Diferença entre arrays
         $lista = ["Pedro", "Paulo", "Jose", "Francisca", "Paula", "Joao"];
         $aprovados = ["Pedro", "Francisca", "Joao"];
         $reprovados = array_diff($lista, $aprovados);
         var_dump($reprovados);

         // Filtra um valor no array
         $numeros = [10, 20, 24, 91, 18];
         $filtrados = array_filter($numeros, function($item) {
            if ($item <= 20) {
              return true;
            }
            else {
              return false;
            }
         });
         print_r($filtrados);

         // Executa um procedimento nos itens do array
         $dobrados = array_map(function($item) {
            return $item * 2;
         }, $numeros);
         print_r($dobrados);

         // Busca valor dentro do array e retorna um bool
         if (in_array(91, $numeros)) {
            echo "<p>Existe</p>";
         }
         else {
           echo "<p>Não existe</p>";
         }

         // Retorna o index do valor no array
         $pos = array_search(91, $numeros);
         echo $pos;

         
       ?>
     
     </pre>
    <br>
  </div>
</body>
</html>