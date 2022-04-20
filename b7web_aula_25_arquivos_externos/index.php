<?php

$texto = "Um texto qualquer para treinar a escrita em arquivos";

file_put_contents("texto.txt", $texto);

$texto = file_get_contents("./texto.txt");
$texto .= "\nOutro texto concatenado ao antigo!";

file_put_contents("texto.txt", $texto);
