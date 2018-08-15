<?php
class ContaBanco{

    //atributos da classe
    private $numConta = 1;
    private $tipo;
    private $dono;
    private $saldo;
    private $status = false;

    //metodos gets e sets
    public function getNumConta(){
        return $this->numConta;
    }


    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getDono(){
        return $this->dono;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function getStatus(){
        return $this->status;
    }
    

    //metodos da classe
    public function abrirConta($dono, $tipo, $saldo){
        
        $this->dono = $dono;
        $this->tipo = $tipo;
        $this->saldo = $saldo;
        $this->numConta + 1;
        $this->status = true. " - Conta ativa";
        
    }

    public function fecharConta(){
        $this->dono = "";
        $this->tipo = "";
        $this->saldo = 0;
        $this->numConta = 0;
        $this->status = false. "Conta encerrada";
    }

    public function depositar($valor){
        //testa se a conta esta fechada e se estiver abre uma nova conta
        if($this->status == true){
        $this->saldo += $valor;
        }else {
            return "erro conta esta fechada ERR-1";
        }
    }

    public function sacar($valor){
        //testa se a conta esta fechada e se estiver abre uma nova conta
        if($this->status == true){
        $this->saldo -= $valor;
        }else {
            return "erro conta esta fechada ERR-2";
        }
    }

    public function pagarMensal(){
        if ($this->status == true) {
             //parcela mensal da contra é 10 reais 
             $this->saldo -= 10;
        }else{
            return "erro a conta esta fechada ERR-3";
        }
       
    }

    public function extrato(){
        echo "Nome: ". $this->dono;
        echo "<br>";
        echo "Tipo: ". $this->tipo;
        echo "<br>";
        echo "Numero da conta: ". $this->numConta;
        echo "<br>";
        echo "Saldo: ". $this->saldo;
        echo "<br>";
        echo "Status: ". $this->status;

    }
    
}