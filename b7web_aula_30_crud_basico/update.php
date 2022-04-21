<?php
require "config.php";
session_start();

$id = filter_input(INPUT_POST, "id");
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if ($id && $nome && $email) {
  
    // Atualiza um registro
    $sql = $pdo->prepare("UPDATE cliente SET nome=:nome, email=:email WHERE id=:id");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":id", $id);
    $sql->execute();

    header("Location: index.php");
    exit;
}
else { 
  $_SESSION["error"] = "<p style='color: red;'>Preencha corretamente todos os campos!</p>";
  header("Location: editar_form.php");
}
