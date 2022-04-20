<?php
session_start();

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

if ($nome) {
  $_SESSION["nome"] = $nome;
  unset($_SESSION["error"]);
  header("Location: index.php");
}
else {
  $_SESSION["error"] = "O campo 'nome' deve ser preenchido!";
  header("Location: login.php");
}
