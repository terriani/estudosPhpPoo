<?php

require_once "Bolsista.php";
require_once "Tecnico.php";
require_once "Professor.php";
require_once "Visitante.php";


$b1 = new Bolsista("vinicius", 28, "masc", 4487, "sistemas", "integral");

$b1->setMatr(4486);
$b1->setCurso("sistemas");

$b1->fazerNiver();
$b1->fazerNiver();

print_r($b1);