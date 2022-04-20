<?php 
session_start();

$nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_GET, "idade", FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);

// filter_var => Valida a informação depois de ser capturada

if ($nome && $email && $idade) {
  echo "Nome: $nome <br/>";
  echo "Idade: $idade <br/>";
  echo "Email: $email";
}
else {
  $_SESSION["aviso"] = "Preencha os itens corretamente!";

  header("Location: index.php");
  exit;
}
