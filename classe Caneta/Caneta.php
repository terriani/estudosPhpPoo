<?php

class Caneta{
    private $cor;
    private $modelo;
    private $ponta;
    private $tampar = true;

//__constructor
public function Caneta($cor, $modelo){
    $this->cor = $cor;
    $this->modelo = $modelo;
}

// make get and set

public function getCor(){
     return $this->cor;
}

public function setCor($cor){
    $this->cor = $cor;
}

public function getModelo(){
    return $this->modelo;
}

public function setModelo($modelo){
    $this->modelo = $modelo;
}

public function getPonta(){
    return $this->ponta;
}

public function setPonta($ponta){
    $this->ponta = $ponta;
}

public function destampar(){
    $this->tampar = false;
}

public function tampar(){
    $this->tampar = true;
}

public function rabiscar(){
    if($this->tampar == true){
        echo "não posso rabiscar";
    }else {
        echo "estou rabiscando";
    }
}



}
