<?php

require_once "Aluno.php";
require_once "Funcionario.php";
require_once "Professor.php";

$a = new Aluno("joao", 18, "masc");

$a1 = new Aluno("Joao2", 20, "masc", 111, "si");

print_r($a1);