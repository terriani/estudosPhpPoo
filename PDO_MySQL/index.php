<?php


//cria uma sring de conexão passando o driver do banco o nome do banco e o charset
$dns = 'mysql:dbname=estudos_PDO;charset=utf8';

//usuario 
$user = "root";

//senha
$pass = "";


//configurações inicias do pdo
$options = [

  //testa se já existe uma conexão identica caso já exixta o pdo se conecta por ela não abrindo uma nova conexão  
  PDO::ATTR_PERSISTENT => true,

    //transfoma todo erro do mysql em uma exception
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

    //define como padrao o fetch_object (fetch_obj transforma os dados vindos do banco em objetos)
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ

];

//tenta executar a conexão com o banco de dados informado 
try{

    //executa a conexão
    $pdo = new PDO($dns, $user, $pass, $options);


}

//caso de erro na conexão executa  uma msg de erro
catch(PDOException $e){

  //exibe a msg de erro (getMesssage() pega a msg de erro vinda do PDOException)
    exit('ERR' . $e->getMessage());

  }




//atualiza dados no banco de dados
/*$update = $pdo->exec("
  UPDATE funcionarios
  SET nome = 'vinicius terriani', 
  idade = 29,
  email = 'vinicius.terriani@hotmail.com' 
  WHERE id = 25
");*/

//insere um funcionario na tabela para teste
/*$insert = $pdo->exec("
   INSERT INTO funcionarios
   (nome, idade, email) 
   VALUES 
   ('joao', 22, 'joao@j.com')
 ");*/

  //deletando arquivos do banco de dados
 /*$delete = $pdo->exec("DELETE FROM funcionarios WHERE id in (21, 22, 23)");*/


//executa uma busca no banco com pdo
$stmt = $pdo->query('SELECT id, nome, idade, email FROM funcionarios');

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
    </style>
  </head>
  <body>
   <table class="centered striped">
       <thead>
           <tr>
               <th data-field="id">id</th>
               <th data-field="name">nome</th>
               <th data-field="price">idade</th>
               <th data-field="email">email</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach($stmt as $employee):;?>
           <tr>
               <td><?= $employee->id; ?></td>
               <td><?= $employee->nome; ?></td>
               <td><?= $employee->idade; ?></td>
               <td><?= $employee->email?></td>
            </tr>
            <? endforeach ?>
       </tbody>
   </table>
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