<?php

echo "
    <form acttion='' method='get'>
        <input type='text' name='nome'>
        <label>Digite seu nome:</label>
        <input type='submit' value='enviar'>
    </form>
";


echo "<h1 style='text-align: center;margin-top:100px'>esta é uma url amigável</h1>";
echo "ola - ". $_GET['nome'];