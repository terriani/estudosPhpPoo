<?php

require_once "Animal.php";

class Ave extends Animal{

    private $corPena;

    

    /**
     * Get the value of corPena
     */ 
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Set the value of corPena
     *
     * @return  self
     */ 
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;

        return $this;
    }

    //metodo da classe ave
    public function fazerNinho(){
        echo "fazendo ninho";
    }

    //metodos sobrescritos da classe
    public function locomover(){
        echo "estu voando";
    }

    public function alimentar(){
        echo "comendo frutas";
    }

    public function emitirSom(){
        echo "som de ave";
    }

    //construtor
    public function __construct($peso, $idade, $membros, $corPena){
        parent::__construct($peso, $idade, $membros);
        $this->corPena = $corPena;
    }
}