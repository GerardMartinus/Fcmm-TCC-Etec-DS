<?php
 if(isset($_POST['submit']))
 {
  //  print_r('Nome: ' . $_POST['nome']);
  //  print_r('<br>');
  //  print_r('Email: ' . $_POST['email']);
  //  print_r('<br>');
  //  print_r('Senha: ' . $_POST['senha']);
  
  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha)
  VALUES ('$nome', '$email', '$senha')");
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
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com">
    <link rel="stylesheet" href="http://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css2?family=Roboto=wght@100;300;400;500;700&display=swap">
    <title>Cadatro</title>
</head>
<body>
    <div class="container">
        <div class="center">
          <div class="form">
            <h1><a href="../html/index.html">Fala com a minha mão</a></h1>
            <form action="cadastro.php" method="POST">
              <fieldset>
                <ul>
                  <h2>Cadastre-se</h2>
                  <li><input type="text" placeholder="Nome" name="nome" /></li>
                  <li><input type="email" placeholder="E-mail" name="email" /></li>
                  <li><input type="password" placeholder="Senha" name="senha" /></li>
                  <li><input type="submit" name="submit" id="submit"></li>
                  <li><p>Já possui um cadastro? <a href="login.php">Faça Login</a></p></li>                  
                </ul>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
</body>
</html>