<?php 

require_once "Pessoa.php";


class Professor extends Pessoa{

    private $especialidades;
    private $salario;

    

   
    public function getEspecialidades()
    {
        return $this->especialidades;
    }

    public function setEspecialidades($especialidades)
    {
        $this->especialidades = $especialidades;

        return $this;
    }

   
    public function getSalario()
    {
        return $this->salario;
    }

    
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    public function recebeAum($valor){
        $this->setSalario($this->getSalario() + $valor);
    }
}