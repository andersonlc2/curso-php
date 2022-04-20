<?php 
  session_start();

  if ($_SESSION["error"]) {
    $error = $_SESSION["error"];
    echo "<p style='color: red;'>$error</p>";
    unset($_SESSION["error"]);
  }
?>

<form method="POST" action="recebedor.php">
  <label for="nome">Qual seu nome?</label>
  <input type="text" name="nome" id="nome" />
  <input type="submit" value="Salvar">
</form>