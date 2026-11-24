<?php
    $servidor="localhost";
    $banco="dbteste";
    $porta="3305";
    $usuario="root";
    $senha="12345678";
    $cmd=new PDO("mysql:host=$servidor;port=$porta;dbname=$banco",$usuario,$senha);
?>