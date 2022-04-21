<?php 
require "config.php";
session_start();

$registro = [];
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if ($id) {
  $sql = $pdo->prepare("SELECT * FROM cliente WHERE id=:id");
  $sql->bindValue(":id", $id);
  $sql->execute();

  if ($sql->rowCount() > 0) {
    $registro = $sql->fetch( PDO::FETCH_ASSOC );
  }
  else {
    header("Location: index.php");
  }
}
else {
  header("Location: index.php");
}

?>

<h1>Editar Usuário</h1>

<form method="POST" action="update.php">

  <input type="hidden" name="id" value="<?=$registro["id"]?>">

  <label for="nome">Nome :</label>
  <input type="text" name="nome" id="nome" value="<?=$registro["nome"]?>">

  <label for="email">Email</label>
  <input type="email" name="email" id="email" value="<?=$registro["email"]?>">

  <input type="submit" value="Editar">
</form>

<?php
if ($_SESSION["error"]) {
  echo $_SESSION["error"];
}
unset($_SESSION["error"]);
?>