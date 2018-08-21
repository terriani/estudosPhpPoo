<?php

function autoload_1($class)
{


    //cria uma variavel de path para o caminho completo dos arquivos de classe do projeto
    $path = __DIR__. "/classe/$class.php";

    //testa se o caminho da variavel path existe se existir faz um require_once no caminho e retorna verdadeiro 
    if (file_exists($path)) {
        require_once $path;
        return true;
    }

    //caso não exista o caminho do arquivo do autoload retorna falso
    return false;

}

//registra o autoload
spl_autoload_register("autoload_1");