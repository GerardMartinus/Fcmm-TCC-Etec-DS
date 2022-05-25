<?php
    include_once('config.php');
    if( !empty($_POST)){
        
        //processar pedido
        $user = mysql_real_escapte_string ($_POST['email']);
        $q = mysql_query ("SELECT * FROM usuarios WHERE email = '$user'");

        if (mysql_num_rows ($q) == 1){
            
        }
        
    }
?>