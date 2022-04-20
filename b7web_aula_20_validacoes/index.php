<?php
require_once("template/header.php")
?>

<form method="GET" action="recebedor.php">

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