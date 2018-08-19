<?php 

require_once "Pessoa.php";

class Aluno extends Pessoa{

    //atributos
    private $matr;
    private $curso;
    

    /**
     * Get the value of matr
     */ 
    public function getMatr()
    {
        return $this->matr;
    }

    /**
     * Set the value of matr
     *
     * @return  self
     */ 
    public function setMatr($matr)
    {
        $this->matr = $matr;

        return $this;
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }


    //construtor
    public function __costruct($nome, $idade, $sexo, $matr, $curso){
        parent::__construct($nome, $idade, $sexo);

        $this->matr = $matr;
        $this->curso = $curso;
    }

    public function pagarMensalidade(){
        return "a mensalidade do aluno: ".$this->getNome()." foi paga";
    }
}