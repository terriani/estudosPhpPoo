<?php

function autoload($class){
    $path = __DIR__."/$class.php";
    if (file_exists($path)) {
        require_once $path;
        return true;
    }
    return false;
}

spl_autoload_register("autoload");