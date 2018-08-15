<?php 


require "Luta.php";

//cadastrar 6 lutadores passando como parametro as informações do construtor

$l = array();

$l[0]= new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);

$l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);

$l[0]->apresentar();
$l[1]->status();

$c = new Luta();



echo "<br><br><br>";

$c->marcarLuta($l[0], $l[1]);

$c->lutar();