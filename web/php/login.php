<?php
    session_start();

    /* print_r($_REQUEST); */
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //Acessa sistema.
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao -> query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        //Não acessa sistema.

        header("Location: login.php");  
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bruno Martins de Morais Silva, Arthur Souto, Gabriel Santos, Ana Luisa, Igor">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
  <h2><a href="../html/index.html">Voltar</a></h2>
    <div class="container">
        <div class="center">
          <div class="form">
            <h1><a href="../html/index.html">Fala com a minha mão</a></h1>
            <form action="login.php" method="POST">
              <fieldset>
                <ul>
                  <h2>Login</h2>
                  <li><input type="email" placeholder="Email" name="email" /></li>
                  <li><input type="password" placeholder="Senha" name="senha" /></li>
                  <li><input type="submit" class="btn" name="submit"/></li>
                  <li><p>Não possui cadastro? <a href="cadastro.php">Registre-se</a></p></li>       
                  <a href="esqueceusenha.php">Esqueci minha senha</a>           
                </ul>
              </fieldset>
            </form>
          </div>
        </div>
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