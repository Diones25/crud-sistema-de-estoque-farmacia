<?php
    $dsn = "mysql:dbname=farmacia;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        //echo "Conexão estabelecida com sucesso!";

    }catch(PDOException $e){
        echo "A conexão Falhou: ".$e->getMessage();
    }
?>