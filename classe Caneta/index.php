<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      html{
          background-color: #c9c9c9;
      }
    </style>
</head>
<body>
   <h1>testando o editor vs code</h1>
   <pre>
   <?php
    require_once "Caneta.php";

    $c1 = new Caneta("azul", "pena"); //metodo construtor alterado


    $c1->setPonta(0.5);

    $c1->destampar();

    $c1->rabiscar();

      //pular 5 linhas
      for ($i = 0; $i <5; $i++){
          echo PHP_EOL;
      }

    echo "minha caneta da ". $c1->getModelo(). " tem ponta de ". $c1->getPonta(). " e cor ". $c1->getCor();

   ?>
   </pre>
</body>
</html>