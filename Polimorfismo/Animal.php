<?php

abstract class Animal{

    protected $peso;
    protected $idade;
    protected $membros;

    

    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of membros
     */ 
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * Set the value of membros
     *
     * @return  self
     */ 
    public function setMembros($membros)
    {
        $this->membros = $membros;

        return $this;
    }

    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();

    //construtor
    public function __construct($peso, $idade, $membros){
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
    }
}