<?php
session_start();
require_once("template/header.php");

if ($_SESSION["aviso"]) {
  echo $_SESSION["aviso"];
  unset($_SESSION["aviso"]);
}
?>

<a href="apagar.php">Apagar Cookies</a>

<form method="POST" action="recebedor.php">

  <label>
    Nome:
    <br/>
    <input type="text" name="nome">
  </label>
  <br/>
  <br/>

  <label>
    Idade:
    <br/>
    <input type="text" name="idade">
  </label>
  <br/>
  <br/>

  <label>
    Email:
    <br/>
    <input type="email" name="email">
  </label>
  <br/>
  <br/>
  
  <input type="submit" value="Enviar">

</form>