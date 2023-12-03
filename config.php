<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'alugaflex';

    /*
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'alugafelx');
    */

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*
    if($conexao -> connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão Efetuada com Sucess";
    }
    */

    
?>
