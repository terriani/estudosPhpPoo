<?php 

require_once "Publicacao.php";
require_once "Pessoa.php";

class Livro implements Publicacao{

    //atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto = false;
    private $leitor = null;

    //getters e setters
    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getTotPaginas(){
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual(){
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    public function getAberto(){
        return $this->aberto;
    }

    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function getLeitor(){
        return $this->leitor;
    }

    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }

    //metodo construtor
    public function __construct($titulo, $autor, $totPaginas){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
    }

    //metodo da classe
    public function detalhes(){ //incluir informações

        //msg sobre o estafo do livro
        if ($this->getAberto()===true) {
            $this->setAberto("Aberto");
        }else{
            $this->setAberto("Fechado");
        }
        
        echo "<br>Livro: ". $this->getTitulo(). "<br> Autor: ". $this->getAutor().
         "<br>Total de paginas: ". $this->getTotPaginas(). "<br>Leitor: ". $this->getLeitor(). "<br>". "Estado: ".$this->getAberto(). "<br>". "Pagina atual:".$this->getPagAtual(). "<br>" ;
    }

    //metodos obrigatorios da interface
    public function abrir(){ 
        if ($this->getAberto() === true) {
            return "Livro já esta aberto";
        }else{
        $this->setAberto(true);
        $this->setPagAtual($this->getPagAtual());
        }
    }

    public function fechar(){ 

        if ($this->getAberto() === false) {
            return "O livro já esta fachado";
        }else{
            $this->setAberto(false);
        }
    }

    public function folhear(){ //falta fazer validação

        if ($this->getAberto() === false) {
            return "O livro esta fechado";
        }else{
            $this->setPagAtual($this->getPagAtual() + 1);
        }

    }

    public function avancarPag(){ //falta fazer validação
        if ($this->getAberto() === false) {
            return "O livro esta fechado";
        }else{
            $this->setPagAtual($this->getPagAtual() + 1);
        }
    }

    public function voltarPag(){ //falta fazer validação
        if ($this->getAberto() === false) {
            return "O livro esta fechado";
        }else{
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }
}