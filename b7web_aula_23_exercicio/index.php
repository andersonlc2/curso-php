<?php
session_start();


if ($_SESSION["nome"]) {
  echo "Olá, ".$_SESSION["nome"]." - ";
  echo '<a href="deslogar.php">Sair</a>';
}
else {
  unset($_SESSION["error"]);
  header("Location: login.php");
}
