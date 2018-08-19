<?php

require_once "Aluno.php";

class Tecnico extends Aluno{

    //atributos
    private $registroProfissional;
    

    /**
     * Get the value of registroProfissional
     */ 
    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }

    /**
     * Set the value of registroProfissional
     *
     * @return  self
     */ 
    public function setRegistroProfissional($registroProfissional)
    {
        $this->registroProfissional = $registroProfissional;

        return $this;
    }

    //construct
    public function __construct($nome, $idade, $sexo, $matr, $curso, $registroProfissional){
        parent::__construct($nome, $idade, $sexo, $matr, $curso);

        $this->registroProfisional = $registroProfissional;
    }

    public function praticar(){
        return "O ".$this->getNome()." esta praticndo";
    }
}