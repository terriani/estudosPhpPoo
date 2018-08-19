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

    public function pagarMensalidade(){
        return "a mensalidade foi paga";
    }
}