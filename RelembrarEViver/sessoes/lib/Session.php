<?php 

class Session
{

    
    private function sessionControl($login, $senha)
    {
        
        if ($login == "vini" and $senha == 123) {
            
            header("location: logado.php");
            return true;

        }else if (!empty($login) and !empty($senha)){
            //header("location: index.php");
            
            echo "senha ou usuario invalido";

            return false;
         }    
       
    }


   public function __construct()
   {


    //operador de coalescência / ?? / teste se o $_GET ou o $_POST existe,
    //caso exista coloca o valor vindodele em uma variavel,
    //caso não exita coloca o valor vinso depois dos dois sinais de interrogação / ?? /
    $login = $_POST['login'] ?? "";
    $pass = $_POST['pass'] ?? "";

    $this->sessionControl($login, $pass);
    
   }
}