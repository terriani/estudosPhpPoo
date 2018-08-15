<?php 

require_once "Controlador.php";

class ControleRemoto implements Controlador{

    // atributos da classe
    private $volume;
    private $ligado;
    private $tocando;

    //geters e seterts
public function getVolume(){
    return $this->volume;
}

public function setVolume($volume){
    $this->volume = $volume;
}

public function getLigado(){
    return $this->ligado;
}

public function setLigado($ligado){
    $this->ligado = $ligado;
}

public function getTocando(){
    return $this->tocando;
}

public function setTocando($tocando){
    $this->tocando = $tocando;
}

// metodo construtor
public function ControleRemoto(){
    $this->setVolume(20);
    $this->setLigado(true);
    $this->setTocando(true);
}

// implementar os metodos da interface
public function ligar(){
    $this->setLigado(true);
    $this->setTocando(true);
    $this->setVolume(20);
}

public function desligar(){
    $this->setLigado(false);
    $this->setTocando(false);
    $this->setVolume(0);
}

public function abrirMenu(){
    if ($this->getLigado() == true) {
        echo "menu aberto <br>";
    }else{
        echo "erro não posso avrir o menu pq o radio esta desligado <br>";
    }
}

public function fecharMenu(){
    if ($this->getLigado() == true) {
        echo "menu fechado <br>";
    }else{
        echo "menu não pode ser fechado póis oi radio esta desligado <br>";
    }
}

public function maisVolume(){
    if ($this->getLigado() == true) {
        if ($this->getTocando() == true) {
            $this->setVolume($this->getVolume() + 5);
        } else{
            echo "o radio esta pausado <br>";
        }
    }else{
        echo "o radio esta desligado <br>";
    }
}

public function menosVolume(){
    if ($this->getLigado()== true) {
        if ($this->getTocando() == true) {
            $this->setVolume($this->getVolume() - 5);
        }else{
            return "o radio esta pausado <br>";
        }
    }else{
        echo "o radio esta desligado <br>";
    }
}

public function ligarMudo(){
    if ($this->getLigado() == true) {
        echo "mudo ligado <br> ";
        
    }else{
        echo "radio desligado <br>";
    }
}

public function desligarMudo(){
    if ($this->getLigado() == true) {
        echo "mudo desligado <br>";
    }else{
        echo "radio desligado <br>";
    }
}

public function play(){
    if ($this->getLigado() == true and $this->getTocando() == false) {
        $this->setTocando(true);
        echo "radio tocando <br>";
    }else {
        echo "ERRO <br>";
    }
}

public function pause(){
    if ($this->getLigado() == true and $this->getTocando() == true) {
        $this->setTocando(false);
        echo "radio pausado <br>";
    }else{
        echo "ERRO <br>";
    }
}

public function estado(){
    echo "<br>";
    echo "Volume - ". $this->getVolume();
    echo "<br>";
    echo "Ligado - ". $this->getLigado();
    echo "<br>";
    echo "Tocando - ". $this->getTocando();
    echo "<br>";
}


}