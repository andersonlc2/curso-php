<?php
require_once "models/Usuario.php";


class UsuarioDAOMySQL implements UsuarioDAO
{

  private $pdo;

  public function __construct(PDO $driver)
  {
    $this->pdo = $driver;
  }

  public function add(Usuario $user)
  {
    $sql = $this->pdo->prepare("INSERT INTO cliente (nome, email) VALUES (:nome, :email)");
    $sql->bindValue(":nome", $user->getNome());
    $sql->bindValue(":email", $user->getEmail());
    $sql->execute();

    $user->setId($this->pdo->lastInsertId());

    return $user;
  }

  public function findAll()
  {
    $array = [];
    $sql = $this->pdo->query("SELECT * FROM cliente");

    if ($sql->rowCount() > 0) {
      $data = $sql->fetchAll();

      foreach($data as $item) {
        $user = new Usuario();
        $user->setId($item["id"]);
        $user->setNome($item["nome"]);
        $user->setEmail($item["email"]);
        
        $array[] = $user;
      }
    }

    return $array;
  }

  public function findById(int $id)
  {
    $sql = $this->pdo->prepare("SELECT * FROM cliente WHERE id=:id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $item = $sql->fetch();

      $user = new Usuario();
      $user->setId($item["id"]);
      $user->setNome($item["nome"]);
      $user->setEmail($item["email"]);

      return $user;
    } else {
      return false;
    }
  }

  public function findByEmail(String $email) 
  {
    $sql = $this->pdo->prepare("SELECT * FROM cliente WHERE email=:email");
    $sql->bindValue(":email", $email);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $item = $sql->fetch();

      $user = new Usuario();
      $user->setId($item["id"]);
      $user->setNome($item["nome"]);
      $user->setEmail($item["email"]);

      return $user;
    } else {
      return false;
    }
  }


  public function update(Usuario $user)
  {
    $sql = $this->pdo->prepare("UPDATE cliente SET nome=:nome, email=:email WHERE id=:id");
    $sql->bindValue(":nome", $user->getNome());
    $sql->bindValue(":email", $user->getEmail());
    $sql->bindValue(":id", $user->getId());
    $sql->execute();

    return true;
  }

  public function delete(int $id)
  {
    $sql = $this->pdo->prepare("DELETE FROM cliente WHERE id=:id");
    $sql->bindValue(":id", $id);
    $sql->execute();
  }
}
