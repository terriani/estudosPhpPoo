<?php

session_start();

//recupera o email digitado pelo usuario
$login = $_POST['login'];

//recuera a senha digitada pelo usurio
$senha = $_POST['senha'];

//pega o token gravado no formulario
$tokenForulario = $_POST['token'];


//pega o token da sessão
$tokenSession = $_SESSION['token'];


if (isset($login) and isset($senha) and !empty($login) and !empty($senha) and $tokenForulario === $tokenSession) {
    echo "sessão segura";
}else{
    //header("location:index.php");
    echo "os tokens nõ são iguais";
}
