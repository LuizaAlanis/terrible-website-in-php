<?php
    $servidor = "localhost";
    $usuario = "balmy";
    $senha = "123456";
    $banco = "db_balmy";
    
    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>