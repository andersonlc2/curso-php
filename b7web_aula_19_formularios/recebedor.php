<?php 

$nome = filter_input(INPUT_GET, "nome");
$idade = filter_input(INPUT_GET, "idade");

if ($nome) {
  echo "Nome: $nome <br/>";
  echo "Idade: $idade";
}
else {
  header("Location: index.php");
  exit;
}
