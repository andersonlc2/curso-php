<?php

$texto = file_get_contents('../../../../home/anderson/AML/inicio_atividades_04_12.txt');

$texto = explode("\n", $texto);

echo "Quantidade de linhas: ".count($texto)."<br/>";

array_map(function ($item) {
  echo $item."<br/>";
}, $texto);