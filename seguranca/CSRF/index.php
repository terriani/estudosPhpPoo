<?php

//cria um token para ser gravado na sessão do usuário
$token = sha1(uniqid(rand(), true));

//cria a sessão 
session_start();

//grava o token na session
$_SESSION['token'] = $token;

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Title of the document</title>
    <!-- Material Icon CDN -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
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
    </style>
  </head>
  <body>
   <main>
   <h1 class="center">CSRF</h1>
      <div class="container">
          <div class="row">
              <div class="col m12">
                <form action="login.php" method="post">
                  <div class="input-field col s12 l6">
                    <input type="text" id="first_name" class="validate" name="login">
                    <label for="first_name">Email</label>
                  </div>
                  <div class="input-field col s12 l6">
                    <input type="password" id="last_name" class="validate" name="senha">
                    <label for="last_name">Senha</label>
                  </div>
                  <input type="hidden" name="token" value="<?= $token ?>">
                  <button class="btn waves-effect waves-light " type="submit" name="action">Enviar
                      <i class="material-icons right">send</i>
                  </button>
                </form>
              </div>
          </div>
      </div>
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