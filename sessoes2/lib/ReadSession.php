<?php

require_once "autoload.php";

$session = new Session();

if ($session->isValid() === false) {
    echo "sessao expirada";
}

else {
    //echo $session->getSession('email');
}