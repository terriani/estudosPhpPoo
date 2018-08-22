<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php

            //implementação do autoload
            require_once "lib/autoload.php";

            $fatorial = new Fatorial;

           $result =  $fatorial->calcFatorial(5);

           echo $result;

        ?>
    </pre>
</body>
</html>