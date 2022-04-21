<?php 
  session_start();

  if ($_SESSION["error"]) {
    $error = $_SESSION["error"];
    echo "<p style='color: red;'>$error</p>";
    unset($_SESSION["error"]);
  }
?>

<form method="POST" action="recebedor.php">
  <label for="nome">Novo Nome:</label>
  <input type="text" name="nome" id="nome" />
  <input type="submit" value="Salvar">
</form>

<h1>Lista de nomes</h1>
<ul>
  <?php 
  $nomes = file_get_contents("./novosNomes.txt");
  $nomes = explode("\n", $nomes);
  foreach ($nomes as $nome) {
    echo "<li>$nome</li>";
  }
  
  ?>
</ul>