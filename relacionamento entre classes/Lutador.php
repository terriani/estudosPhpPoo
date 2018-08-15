<?php 

class Lutador{

    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //construtor
    public function Lutador($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    //getters e setters
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

   
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    
    public function getPeso()
    {
        return $this->peso;
    }

    
    public function setPeso($peso)
    {
        $this->peso = $peso;

        $this->setCategoria();
    }

    
    public function getCategoria()
    {
        return $this->categoria;
    }

    
    private function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "invalida";
        }elseif($this->peso <= 70.3){
            $this->categoria = "leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = "medio";
        }elseif($this->peso <= 120.2){
            $this->categoria = "pesado";
        }else{
            $this->categoria = "invalido";
        }
    }

    
    public function getVitorias()
    {
        return $this->vitorias;
    }

    
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }

     
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    
    public function getEmpates()
    {
        return $this->empates;
    }

    
    public function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }

    //metodos da classe
    public function apresentar(){
        echo "----------------** Apresentação **------------------";
        echo "<br>";
        echo "Lutador: ". $this->getNome();
        echo "<br>";
        echo "Origem: ". $this->getNacionalidade();
        echo "<br>";
        echo $this->getIdade(). "anos";
        echo "<br>";
        echo $this->getAltura(). " m de altura";
        echo "<br>";
        echo "pesando: ". $this->getPeso();
        echo "<br>";
        echo "Na catergoria: ". $this->getCategoria();
        echo "<br>";
        echo "ganhou: ". $this->getVitorias();
        echo "<br>";
        echo "perdeu: ". $this->getDerrotas();
        echo "<br>";
        echo "empatou: ". $this->getEmpates();
        echo "<br>";
        echo "------------------------------------------------------------";
    }

    public function status(){
        echo "<br>";
        echo "------------------** Status **----------------";
        echo "<br>";
        echo $this->getNome();
        echo "<br>";
        echo "é um peso: ".$this->getCategoria();
        echo "<br>";
        echo $this->getVitorias(). ": vitorias";
        echo "<br>";
        echo $this->getDerrotas(). ": derrotas";
        echo "<br>";
        echo $this->getEmpates(). ":  empates";
        echo "<br>";
        echo "--------------------------------------------------";
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
}