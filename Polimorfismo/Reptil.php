<?php

require_once "Animal.php";

class Reptil extends Animal{

    private $corEscama;

    public function locomover(){
        echo "rastejando";
    }

    public function alimentar(){
        echo "comendo legumes";
    }

    public function emitirSom(){
        echo "som de reptil";
    }

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
}