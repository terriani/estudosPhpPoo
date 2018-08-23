<?php 

class Session
{

    
    private function sessionControl($login, $senha)
    {
        if ($login == "vini" and $senha == 123) {
            
            header("location: logado.php");
            return true;

        }else{
            //header("location: index.php");
            return false;
         }    
       
    }


   public function __construct()
   {
    
    $this->sessionControl($_GET['login'], $_GET['pass']);
    
   }
}