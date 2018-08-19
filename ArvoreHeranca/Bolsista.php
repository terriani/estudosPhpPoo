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
        return "a bolsa foi renovada";
    }

}