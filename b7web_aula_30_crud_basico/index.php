<?php
require "config.php";

$lista = [];
$sql = $pdo->query("SELECT * FROM cliente");
if ($sql->rowCount() > 0) {
  $lista = $sql->fetchAll( PDO::FETCH_ASSOC );
}
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
      <td><?=$registro["id"];?></td>
      <td><?=$registro["nome"];?></td>
      <td><?=$registro["email"];?></td>
      <td>
        <a href="editar_form.php?id=<?=$registro["id"]?>">[ Editar ]</a>
        <a href="delete.php?id=<?=$registro["id"]?>" onclick="return confirm('Tem certeza que deseja excluir ?')" >[ Excluir ]</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
