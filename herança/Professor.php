<?php 

require_once "Pessoa.php";


class Professor extends Pessoa{

    private $especialidades;
    private $salario;

    

    /**
     * Get the value of especialidades
     */ 
    public function getEspecialidades()
    {
        return $this->especialidades;
    }

    /**
     * Set the value of especialidades
     *
     * @return  self
     */ 
    public function setEspecialidades($especialidades)
    {
        $this->especialidades = $especialidades;

        return $this;
    }

    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    public function recebeAum($valor){
        $this->setSalario($this->getSalario() + $valor);
    }
}