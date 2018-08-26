
<?php
require_once "lib/autoload.php";
require_once "lib/ReadSession.php";
$session = new Session();
$session->setSession('email', 'viniterriani.vt@gmail.com');
echo $session->getSession('email');
//$session->isValid();
$session->register();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>