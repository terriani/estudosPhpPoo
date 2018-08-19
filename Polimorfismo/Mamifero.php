<?php 

require_once "Animal.php";

class Mamifero extends Animal{

    private $corPelo;

    

    /**
     * Get the value of corPelo
     */ 
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * Set the value of corPelo
     *
     * @return  self
     */ 
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;

        return $this;
    }

    //metodos sobrescritos da classe Aanimal
    public function locomover(){
        echo "correndo";
    }

    public function alimentar(){
        echo "mamando";
    }

    public function emitirSom(){
        echo "som de mamifero";
    }

    //construtor sobrescrito da classe animal
    public function __construct($peso, $idade, $membros, $corPelo){
        parent::__construct($peso, $idade, $membros);
        $this->corPelo = $corPelo;
    }
    

}