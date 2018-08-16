<?php 

class Pessoa{

    //atributos 
    private $nome;
    private $idade;
    private $sexo;

    //construtor da classe
    public function Pessoa($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    //metodos especiais

    public function getNome()
    {
    return $this->nome;
    }

    public function getIdade()
    {
    return $this->idade;
    }

    private function setIdade($idade)
    {
    $this->idade = $idade;

    return $this;
    }

    public function getSexo()
    {
    return $this->sexo;
    }

    //metodos da classe Pessoa
    public function fazerAniversario(){
        $this->setIdade( $this->getIdade() + 1 );
    }
}
