<?php 
session_start();
?>

<h1>Adicionar Usuário</h1>

<form method="POST" action="create.php">
  <label for="nome">Nome :</label>
  <input type="text" name="nome" id="nome">

  <label for="email">Email</label>
  <input type="email" name="email" id="email">

  <input type="submit" value="Adicionar">
</form>

<?php
if ($_SESSION["error"]) {
  echo $_SESSION["error"];
}
unset($_SESSION["error"]);
?>