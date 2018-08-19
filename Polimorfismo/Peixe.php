<?php

require_once "Animal.php";

class Peixe extends Animal{

    private $corEscama;

    

    /**
     * Get the value of corEscama
     */ 
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */ 
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }

    public function soltarBolhas(){
        echo "soltou uma bolha";
    }

    public function locomover(){
        echo "nadando";
    }

    public function alimentar(){
        echo "comendo planctons";
    }

    public function emitirSom(){
        echo "peixe não faz barulho";
    }

    //construtor
    public function __construct($peso, $idade, $membros, $corEscama){
        parent::__construct($peso, $idade, $membros);
        $this->cor = $corEscama;
    }
}