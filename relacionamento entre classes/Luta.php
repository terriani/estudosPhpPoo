<?php 

require "Lutador.php";

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function getDesafiado(){
        return $this->desafiado;
    }

    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado; 
    }

    public function getDesafiante(){
        return $this->desafiante;
    }

    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

    public function getRounds(){
        return $this->rounds;
    }

    public function setRounds($rounds){
        $this->rounds = $rounds;
    }

    public function getAprovada(){
        return $this->aprovada;
    }

    public function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }

    //metodos da classe
    public function marcarLuta($desafiado,  $desafiante){
        if ($desafiado->getCategoria() == $desafiante->getCategoria()) {
            if ($desafiado != $desafiante) {
                $this->aprovada = true;
                $this->desafiado = $desafiado;
                $this->desafiante = $desafiante;
            }else{
                echo "a luta não mpoide acontecer pq os lutadores são os mesmo";
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }else{
            echo "luta impossivel de ser marcada";
            $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
        }
    }

    public function lutar(){
        if ($this->aprovada) { 
            echo "a luta esta rolando <br><br><br>";
            $vencer = random_int(0,2);
          if ($vencer == 0) {
              echo "A luta empatou";
              $this->desafiado->empatarLuta();
              $this->desafiante->empatarLuta();
              $this->desafiado->status();
              $this->desafiante->status();
          }else if($vencer == 1){
            echo "desafiante venceu";
            $this->desafiante->ganharLuta();
            $this->desafiado->perderLuta();
            $this->desafiado->status();
            $this->desafiante->status();
          }else {
              echo "desefiado venceu";
              $this->desafiado->ganharLuta();
            $this->desafiante->perderLuta();
            $this->desafiado->status();
            $this->desafiante->status();
          }
        }else{
            echo "a luta não foi aprovada";
        }
    }


}