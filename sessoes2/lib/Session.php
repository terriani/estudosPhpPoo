<?php

class Session
{


    //metodo construtor
    public function __construct($sessionName = 'TERRIANI')
    {
        session_name($sessionName);
        session_start();
        
    }

    public function setSession($field, $value)
    {
        $_SESSION[$field] = $value;
    }

    private function has($field){
        return isset($_SESSION[$field]);
    }

    public function getSession($field)
    {
        if ($this->has($field)) {
            //return $this->has($field);
            return $_SESSION[$field];

            
        }
    
        return null;
       
    }

    private function setExpireTime($strTime)
    {
        $this->setSession("duration", $strTime);
        $this->setSession("expire", strtotime("+ $strTime"));
    }

    public function register($duration = '5 sec')
    {
        $this->setExpireTime($duration);
    }

    private function expired()
    {
        if (time() > $this->getSession('expire')) {
            return true;
        }
        return false;
    }

    private function destroySession()
    {
        $_SESSION = [];
        session_destroy();
        return true;
    }

    private function renewSession()
    {
        $this->setExpireTime($this->getSession('duration'));
        session_regenerate_id(true);
    }

    public function isValid()
    {
        if ($this->expired() === false) {
            $this->renewSession();
            return true;
        }
        $this->destroySession();
        return false;
    }
}