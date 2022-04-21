<?php
require "config.php";
require "dao/UsuarioDAOMySql.php";

session_start();

$usuarioDao = new UsuarioDAOMySQL($pdo);

$id = filter_input(INPUT_POST, "id");
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if ($id && $nome && $email) {
  
    // Atualiza um registro
    $user = new Usuario();
    $user->setId($id);
    $user->setNome($nome);
    $user->setEmail($email);

    $usuarioDao->update($user);

    header("Location: index.php");
    exit;
}
else { 
  $_SESSION["error"] = "<p style='color: red;'>Preencha corretamente todos os campos!</p>";
  header("Location: editar_form.php?id=$id");
  exit;
}
