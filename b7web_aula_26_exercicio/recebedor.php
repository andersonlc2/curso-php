<?php
session_start();

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$nomes = file_get_contents("./nomes.txt");


if ($nome) {
  
  $nomes .= "\n$nome";
  file_put_contents("novosNomes.txt", $nomes);

  header("Location: index.php");
}
else {

  $_SESSION["error"] = "Um novo nome deve ser enviado!";
  header("Location: index.php");
}