<?php

class Usuario
{
  private int $id;
  private String $nome;
  private String $email;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = trim($id);
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = ucwords(trim($nome));
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = strtolower(trim($email));
  }
}

interface UsuarioDAO
{
  public function add(Usuario $user);
  public function findAll();
  public function findById(int $id);
  public function findByEmail(String $email);
  public function update(Usuario $user);
  public function delete(int $id);
}
