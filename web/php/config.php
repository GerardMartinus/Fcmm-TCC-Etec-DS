<?php

    $dbHost = "Localhost";
    $dbUsername = "root";
    $dbPassword =  "";
    $dbName =  "fcmm";

    $conexao = new mysql($dbHost,$dbUsername,$dbPassword,$dbName);
    
     if ($conexao -> connect_errno)
     {
         echo "Erro.";
     }
     else
     {
         echo "Conexao efetuada com sucesso.";
     }
?>