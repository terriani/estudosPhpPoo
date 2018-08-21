<?php

class Pessoa
{
    public $codigo;
    public $nome;
    public $email;
    
    public function exibe()
    {
        echo 'Codigo: ' . $this->codigo . '<br>';
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Email: ' . $this->email . '<br>';
        echo 'Codigo Interno: 2544<br>';
    }
}
