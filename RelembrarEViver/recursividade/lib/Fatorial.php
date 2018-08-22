<?php

//classe recursiva para calculo do fatorial de um numero 
class Fatorial
{

  public function calcFatorial($valor)
   {
       
       if ($valor == 0) {
           return 1;
       }

       return $valor * $this->calcFatorial($valor - 1);
       
   }

}