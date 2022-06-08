<?php
    include("config.php");
    
    if(isset($_POST["submit"])){

      $email = $conexao ->escape_string($_POST['email']);


        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            $erro[] = "E-mail inválido";
        

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql_query = $conexao->query($sql_code) or die ($conexao->error);
        $dado = $sql_query->fetch_assoc(); 
        $total = $sql_query->num_rows;

        if($total == 0){
          $erro[] = "O e-mail informado não existe no banco de dados.";
        }
            
        if(count($erro) == 0 && total > 0){
            $novasenha = substr(md5(time()),0 ,6);
            $nscriptografada = md5(md5($novasenha));
    
            if(mail($email, "Sua nova senha", "Sua nova senha: ".$novasenha)){
                $sql_code = "UPDATE usuario SET senha = '$nscriptografada' WHERE email = '$email'";
                $sql_query = $mysqli->$query($sql_code) or die ($mysqli->error);

                if($sql_query)
                  $erro[] = "Senha alterada com sucesso!";

                else
                $erro[]="Sua senha não foi alterada!";
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
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Esqueci minha senha</title>
</head>
<body>

  <div id="login-container">

    <h2>Digite seu email para a alteração da senha</h2>

    <form action="esqueceusenha.php" method="POST">
        <input value=""  type="email" placeholder="Digite seu email" name="email">
        <input type="submit" value="Enviar" name="submit">
    </form>
  </div>

      <!-- Adicionando o VLibras -->  
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

</body>
</html>

