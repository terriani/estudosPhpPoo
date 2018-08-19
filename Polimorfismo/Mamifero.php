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

    public function almentar(){
        echo "mamando";
    }

    public function emitirSom(){
        echo "som de mamifero";
    }

    

}