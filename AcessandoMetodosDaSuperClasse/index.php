<?php

require 'Pessoa.php';
require 'Cliente.php';
require 'Fornecedor.php';

$cli = new Cliente;
$cli->codigo = 1;
$cli->nome = 'Carlos';
$cli->email = 'carlos@teste.com';
$cli->cpf = '234.123.123-23';

$cli->exibe();

$fornec = new Fornecedor;
$fornec->codigo = 1;
$fornec->nome = 'Microsoft';
$fornec->email = 'micro@teste.com';
$fornec->cnpj = '234.123.123/0001-23';

$fornec->exibe();