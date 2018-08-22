<?php 

//require_once "AcoesVideo.php";

class Video implements AcoesVideo{

    //atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    private $cont;
    private $aux;


    //construtor
    public function __construct($titulo){
        $this->setTitulo($titulo);
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }

    //getters and setters
    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of avaliacao
     */ 
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * Set the value of avaliacao
     *
     * @return  self
     */ 
    public function setAvaliacao($avaliacao)
    {
        
        
        $this ->cont += 1;
        
        $this ->aux += $avaliacao;
         
        $this->avaliacao = ($this ->aux / $this ->cont);
    }

    /**
     * Get the value of views
     */ 
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set the value of views
     *
     * @return  self
     */ 
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get the value of curtidas
     */ 
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    /**
     * Set the value of curtidas
     *
     * @return  self
     */ 
    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;

        return $this;
    }

    /**
     * Get the value of reproduzindo
     */ 
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    /**
     * Set the value of reproduzindo
     *
     * @return  self
     */ 
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;

        return $this;
    }

        //metodos da interface
        public function play(){
            if ($this->getReproduzindo() == false) {
                $this->setReproduzindo(true);
                echo "o video: ".$this->getTitulo()." esta sendo reproduzido";
            }else{
                echo "o video já esta em reprodução";
            }
        }
    
        public function pause(){
            if ($this->getReproduzindo() == true) {
                $this->setReproduzindo(false);
                echo "o video esta parado";
            }else{
                echo "o video: ".$this->getTitulo()." já esta parado";
            }
        }


        public function like(){
            $this->setCurtidas($this->getCurtidas() + 1);
        }

}