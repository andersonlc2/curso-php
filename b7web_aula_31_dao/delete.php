<?php
require "config.php";
require "dao/UsuarioDAOMySql.php";

session_start();

$usuarioDao = new UsuarioDAOMySQL($pdo);

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if ($id) {
  // Deleta um registro
  $usuarioDao->delete($id);
}

header("Location: index.php");
exit;
