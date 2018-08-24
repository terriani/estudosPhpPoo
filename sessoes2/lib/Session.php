<?php

class Session
{


    //metodo construtor
    public function __construct($sessionName = 'TERRIANI')
    {
        session_name($sessionName);
        session_start();
        
    }

    private function setSession($field, $value)
    {
        $_SESSION[$field] = $value;
    }

    public function getSession($field)
    {
        if ($_SESSION[$field]) {
            return $_SESSION[$field];
    }
    
        return null;
    }


    public function isValid()
    {
        
    }
}