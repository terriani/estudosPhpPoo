
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

            require_once "Video.php";
            require_once "Gafanhoto.php";
            require_once "Visualizacao.php";

            $v[0] = new Video("aula 1 poo");

            $v[1] = new Video("aula 12 php");

            $v[2] = new Video("aula 15 html5");

            //$v[1]->play();

            //$v[0]->pause();

            //print_r($v);

            $g[0] = new Gafanhoto("jubileu", 28, "masc", "gafanhoto");

            $g[1] = new Gafanhoto("creusa", 22, "fem", "crecre");

            //print_r($g);

            $vis[0] = new Visualizacao($g[0], $v[1]);

            $vis[1] = new Visualizacao($g[1], $v[2]);

            $vis[1]->avaliarPorc(60);





            print_r($vis);


            var_dump($v[2]->getViews());
        ?>
    </pre>
</body>
</html>
