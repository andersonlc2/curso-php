<?php 
require "config.php";
session_start();

$registro = [];
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if ($id) {
  // Deleta um registro
  $sql = $pdo->prepare("DELETE FROM cliente WHERE id=:id");
  $sql->bindValue(":id", $id);
  $sql->execute();
}

header("Location: index.php");

?>