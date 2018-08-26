<?php

require_once "autoload.php";

$session = new Session();


if ($session->isValid() === false) {
    echo "sessao expirada";
}

else {
    print_r( $session->getSession('email'));
    echo session_name();
}