<?php 

require_once "Validacao.php";



//chamada de um metodo satico, não precisa ser instanciado para ser chamado, (((colocase o nome da classe :: e o nome dometodo a ser usado)))
var_dump(Validacao::validaEmail("teste@email.com"));

//chama o metodo statico indicanco a classe dele
Validacao::setFrase("deu certo");

//chama o metodo getter statico e pega o valor do atributo também statico
echo Validacao::getFrase();