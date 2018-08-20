<?php 

require_once "Pessoa.php";

class Gafanhoto extends Pessoa{

    //atributos
    private $login;
    private $totAssistido;

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    private function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of totAssistido
     */ 
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * Set the value of totAssistido
     *
     * @return  self
     */ 
    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;

    }

    //construtor 
    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    //metodo da classe
    public function viuMaisUm(){

        $this->setTotAssistido($this->getTotAssistido() + 1);
    }

}