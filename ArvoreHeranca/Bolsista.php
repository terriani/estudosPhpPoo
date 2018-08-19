<?php

require_once "Aluno.php";

class Bolsista extends Aluno{

    //atributos
    private $bolsa;

    public function getBolsa(){
        return $this->bolsa;
    }

    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa(){
        return "a bolsa do aluno: ".$this->getNome()." foi renovada";
    }

    //construct
    public function __construct($nome, $idade, $sexo, $matr, $curso, $bolsa){
        parent::__construct($nome, $idade, $sexo, $matr, $curso);

        $this->bolsa = $bolsa;
    }

    public function pagarMensalidade(){
        return "a mensalidade de bolsista: ".$this->getNome()." foi paga";
    }

}