<?php 
session_start();

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

// filter_var => Valida a informação depois de ser capturada

if ($nome && $email && $idade) {

  $expiracao = time() + (86400 * 30);
  setcookie("nome", $nome, $expiracao);

  echo "Nome: $nome <br/>";
  echo "Idade: $idade <br/>";
  echo "Email: $email";
}
else {
  $_SESSION["aviso"] = "Preencha os itens corretamente!";

  header("Location: index.php");
  exit;
}
