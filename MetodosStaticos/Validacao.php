<?php 

class Validacao{


    //atributo statico
    private static $frase;

    //metodo statico não precisa instanciar para ser chamado 
    public static function validaEmail($email){

        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

   //getter e setter com atributos staticos
   public static function getFrase(){
       //getter statico não usa o this usa-se o self::$atributo
       return self::$frase;
   } 

   public static function setFrase($frase){

        //setter  statico não usa o this usa-se o self::$atributo  = $atributo
       self::$frase = $frase;
   }

   
}