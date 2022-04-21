<?php
require "config.php";
require "dao/UsuarioDAOMySql.php";

session_start();

$usuarioDao = new UsuarioDAOMySQL($pdo);

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if ($nome && $email) {

  // Verifica se o email já não esta no cadastro
  if ($usuarioDao->findByEmail($email) === false) {
    $user = new Usuario();
    $user->setNome($nome);
    $user->setEmail($email);

    $usuarioDao->add($user);

    header("Location: index.php");
    exit;
  } else {
    $_SESSION["error"] = "<p style='color: red;'>Email já cadastrado na base!</p>";
    header("Location: adicionar_form.php");
    exit;
  }
} else {
  $_SESSION["error"] = "<p style='color: red;'>Preencha corretamente todos os campos!</p>";
  header("Location: adicionar_form.php");
}
