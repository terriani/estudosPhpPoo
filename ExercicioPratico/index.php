<?php

require_once "Livro.php";


$livro = new Livro("senhor dos aneis", "RRtokein", 1000);

$leitor = new Pessoa("vinicius", 28, "masculino");

$livro->setLeitor($leitor->getNome());

print_r ($livro->detalhes());

echo "--------------------------------------------------------------------------------------------------";