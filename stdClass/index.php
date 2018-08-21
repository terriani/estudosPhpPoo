<?php

//para criar um objeto se uma classe para ele usamos o stdClass
$obj = new stdClass();

//podemos atribuir qualquer valor a ele agora
$obj->valo1 = "valor 1";
$obj->valor2 = "valor 2";
$obj->valor3 = "valor 3";

print_r($obj);

//tranformando array em objeto
$array = [
    "nome" => "Vinicius",
    "email" => "teste@teste.com",
    "telefone" => "99-9999-9999"
];

//faz o cast de array para objeto
$arr_obj = (object) $array;

//dando var_dump na varaivel $arr_obj ela vira objeto do tipo stdClass como o exemplo de cima
var_dump($arr_obj);

//pegando todos os valores do objeto $arr_obj
foreach ($arr_obj as $name => $val) {
    echo "<br>$name : $val";
}