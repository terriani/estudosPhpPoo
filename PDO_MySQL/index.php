<?php

require_once "autoload/autoload.php";



    $query = new Orm("mysql", "127.0.0.1", "estudos_PDO", "root", "", true);

    $func = $query->select("SELECT id, nome, idade, email FROM funcionarios WHERE id<:id", ["id" => 29]);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Title of the document</title>
    <!-- Material Icon CDN -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
      <link rel="stylesheet" href="css/style.css">
    <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }
      main {
        flex: 1 0 auto;
      }
      h1{
          margin-bottom:100px;
      }
    </style>
  </head>
  <body>
  <h3 class="center">Criando uma classe de apoio para PDO</h3>
    <main>
    <?php 
             foreach($func as $value):
                $id = $value->id;
                $nome = $value->nome;
                $idade = $value->idade;
                $email = $value->email;
        ?>
    <table class="centered striped">
        <thead>
            <tr>
                <th data-field="id">ID</th>
                <th data-field="name">Nome</th>
                <th data-field="age">Idade</th>
                <th data-field="email">E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            
                <td><?=$id?></td>
                <td><?=$nome?></td>
                <td><?=$idade?></td>
                <td><?=$email?></td>
    <?php endforeach;?>
            </tr>
        </tbody>
    </table>
    </main>
    <!-- jQuery CDN -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
      $("document").ready(function(){
        $(".button-collapse").sideNav();
      });
    </script>
  </body>
</html>
