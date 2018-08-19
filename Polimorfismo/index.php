<?php 

require_once "Mamifero.php";
require_once "Ave.php";
require_once "Reptil.php";
require_once "Peixe.php";


$m  = new Mamifero(20, 15, 4, "caramelo");


echo "<br>".$m->locomover(). "<br>";

echo "<br>".$m->alimentar(). "<br>";

echo "<br>".$m->emitirSom(). "<br>";



print_r($m);

echo"<br><br>---------------------------------------------------------------------------------------------<br><br>";

$a  = new Ave(5, 2, 2, "azul");


echo "<br>".$a->locomover(). "<br>";

echo "<br>".$a->alimentar(). "<br>";

echo "<br>".$a->emitirSom(). "<br>";

echo "<br>".$a->fazerNinho(). "<br>";



print_r($a);

echo"<br><br>--------------------------------------------------------------------------------------------<br><br>";

$p  = new Peixe(8, 5, 2, "amarelo");


echo "<br>".$p->locomover(). "<br>";

echo "<br>".$p->alimentar(). "<br>";

echo "<br>".$p->emitirSom(). "<br>";

echo "<br>".$p->soltarBolhas(). "<br>";



print_r($p);

echo"<br><br>---------------------------------------------------------------------------------------------<br><br>";

$l  = new Reptil(10, 12, 22, "verde");


echo "<br>".$l->locomover(). "<br>";

echo "<br>".$l->alimentar(). "<br>";

echo "<br>".$l->emitirSom(). "<br>";



print_r($l);