<?php

require_once "Publicacao.php";

class Livro implements Publicacao
{

  private $titulo;
  private $autor;
  private $totPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;

  public function Livro($titulo, $autor, $totPaginas, $pagAtual, $leitor)
  {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->totPaginas = $totPaginas;
    $this->pagAtual = $pagAtual;
    $this->aberto = false;
    $this->leitor = $leitor;
  }

  public function getTitulo()
  {
    return $this->titulo;
  }

  public function setTitulo($titulo)
  {
    $this->titulo = $titulo;
  }

  public function getAutor()
  {
    return $this->autor;
  }

  public function setAutor($autor)
  {
    $this->autor = $autor;
  }

  public function getTotPaginas()
  {
    return $this->totPaginas;
  }

  public function setTotPaginas($totPaginas)
  {
    $this->totPaginas = $totPaginas;
  }

  public function getPagAtual()
  {
    return $this->pagAtual;
  }

  public function setPagAtual($pagAtual)
  {
    $this->pagAtual = $pagAtual;
  }

  public function getAberto()
  {
    return $this->aberto;
  }

  public function setAberto($aberto)
  {
    $this->aberto = $aberto;
  }

  public function getLeitor()
  {
    return $this->leitor;
  }

  public function setLeitor($leitor)
  {
    $this->leitor = $leitor;
  }

  public function detalhes()
  {
    echo "Título: {$this->getTitulo()} <br />Autor: {$this->getAutor()} <br /><br />";
  }

  public function abrir()
  {
    $this->aberto = true;
  }

  public function fechar()
  {
    $this->aberto = false;
  }

  public function folhear($pagina)
  {
    $this->pagAtual = $pagina;
  }

  public function avancarPag()
  {
    if ($this->pagAtual < $this->totPaginas) {
      $this->pagAtual ++;
    }
  }

  public function voltarPag()
  {
    if ($this->pagAtual > 0) {
      $this->pagAtual --;
    }
  }
}
