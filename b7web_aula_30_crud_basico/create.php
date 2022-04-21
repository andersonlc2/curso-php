<?php
require "config.php";
session_start();

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if ($nome && $email) {
  
  // Verifica se o email já não esta no cadastro
  $sql = $pdo->prepare("SELECT * FROM cliente WHERE email=:email");
  $sql->bindValue(":email", $email);
  $sql->execute();

  if ($sql->rowCount() === 0) {
    // Insere um novo registro no banco
    $sql = $pdo->prepare("INSERT INTO cliente (nome, email) VALUES (:nome, :email)");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":email", $email);
    $sql->execute();

    header("Location: index.php");
    exit;
  }
  else {
    $_SESSION["error"] = "<p style='color: red;'>Email já cadastrado na base!</p>";
    header("Location: adicionar_form.php");
    exit;
  }

}
else { 
  $_SESSION["error"] = "<p style='color: red;'>Preencha corretamente todos os campos!</p>";
  header("Location: adicionar_form.php");
}
