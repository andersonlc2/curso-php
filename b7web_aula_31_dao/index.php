<?php
require "config.php";
require "dao/UsuarioDAOMySql.php";

$usuarioDao = new UsuarioDAOMySQL($pdo);

$lista = $usuarioDao->findAll();

?>

<a href="adicionar_form.php">[ ADICIONAR ]</a>

<table border="1" width="100%">
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Email</th>
    <th></th>
  </tr>
  <?php foreach($lista as $registro): ?>
    <tr>
      <td><?=$registro->getId();?></td>
      <td><?=$registro->getNome();?></td>
      <td><?=$registro->getEmail();?></td>
      <td>
        <a href="editar_form.php?id=<?=$registro->getId()?>">[ Editar ]</a>
        <a href="delete.php?id=<?=$registro->getId()?>" onclick="return confirm('Tem certeza que deseja excluir ?')" >[ Excluir ]</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
