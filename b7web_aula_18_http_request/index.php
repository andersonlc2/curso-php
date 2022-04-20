<?php
require_once("template/header.php")
?>

<form method="POST" action="recebedor.php">

  <label>
    Nome:
    <br/>
    <input type="text" name="nome">
  </label>
  <br/>
  <br/>

  <label>
    Senha:
    <br/>
    <input type="password" name="password">
  </label>
  <br/>
  <br/>
  
  <input type="submit" value="Enviar">

</form>