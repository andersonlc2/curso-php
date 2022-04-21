<?php
require "config.php";
require "dao/UsuarioDAOMySql.php";

session_start();

$usuarioDao = new UsuarioDAOMySQL($pdo);

$user = false;
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if ($id) {
  $user = $usuarioDao->findById($id);

}
if ($user === false){
  header("Location: index.php");
  exit;
}

?>

<h1>Editar Usuário</h1>

<form method="POST" action="update.php">

  <input type="hidden" name="id" value="<?= $user->getId(); ?>">

  <label for="nome">Nome :</label>
  <input type="text" name="nome" id="nome" value="<?= $user->getNome(); ?>">

  <label for="email">Email</label>
  <input type="email" name="email" id="email" value="<?= $user->getEmail(); ?>">

  <input type="submit" value="Editar">
</form>

<?php
if ($_SESSION["error"]) {
  echo $_SESSION["error"];
}
unset($_SESSION["error"]);
?>