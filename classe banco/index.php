<?php

require_once "ContaBanco.php";

//instancia uma conta 
$c1 = new ContaBanco; //conta do jubileu
$c2 = new ContaBanco; //conta da creusa

//abre uma conta poupança para o jubileu
$c1->abrirConta("Jubileu", "poupança", 300);

//abre uma conta poupança para a creusa
$c2->abrirConta("creusa", "corrente", 500);

//creusa saca 100 reais
$c2->sacar(100);

$c2->depositar(200);

//pagamento pagamento mensal
$c2->pagarMensal();

//conta da creusa foi encerrada
$c2->fecharConta();

//ver extrato do jubileu
$c1->extrato();

//pula cinco linhas
for ($i=0; $i < 5 ; $i++) { 
    echo "<br>";
}

//exibe extrato da creusa
$c2->extrato();