<?php

require_once "Pessoa.php";


//sub classe da classe pessoa com herança pobre herdando tudo da sua classe mãe porém não implementando nada novo
class Visitante extends Pessoa{


    //construtor
    public function __construct($nome, $idade, $sexo){
        parent::__construct($nome, $idade, $sexo);
    }


}