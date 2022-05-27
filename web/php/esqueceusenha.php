<?php
    include("config.php");

    if(isset($_POST[ok])){

        $email = $mysqli>-escape_string($_POST['email']);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erro[] = "E-mail inválido";
        }

        $sql_code = "SELECT senha, nome FROM usuario WHERE email = '$_SESSION[email]'";
        $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);
        $dado = $sql_query->fetch_assosc();
        $total = $sql_query->num_rows;

        if($total == 0)

        if(count($erro) == 0 && total > 0){
            $novasenha = substr(md5(time()),0 ,6);
            $nscriptografada = md5(md5($novasenha));
    
            if(mail($email, "Sua nova senha", "Sua nova senha: ".$novasenha)){
                $sql_code = "UPDATE usuario SET senha = '$nscriptografada' WHERE email = '$email'";
                $sql_query = $mysqli->$query($sql_code) or die ($mysqli->error);
            }
        }


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="email" placeholder="Digite seu email" name="email">
        <input type="submit" value="Enviar" name="ok">
    </form>

</body>
</html>

