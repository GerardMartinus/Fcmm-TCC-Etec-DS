

<?php

  /*CONETANDO CONFIG.PHP COM O CADASTRO*/
  include_once('config.php');


 if(isset($_POST['submit']))
 {
/*    print_r('Nome: ' . $_POST['nome']);
   print_r('<br>');
   print_r('Email: ' . $_POST['email']);
   print_r('<br>');
   print_r('Senha: ' . $_POST['senha']); */
  


  /*PEGANDO OS DADOS INSERIDOS NO FORMS.*/
  $nome = mysqli_real_escape_string($conexao, $_POST['name']);
  $email = mysqli_real_escape_string($conexao, $_POST['email']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
  $cpassword = mysqli_real_escape_string($conexao, $_POST['cpassword']);
  
  /* Vendo se a senha e confirma senha estão iguais */
  if($password !== $cpassword){
    /* Devolvendo erro caso a senha e confirma senha estiverem diferentes */
    $errors['password'] = "Confirmação de senha está errada!";
  } 
  
  /* Solicitando o email no banco de dados */
  $email_check = "SELECT * FROM usertable WHERE email = '$email' ";

  /* Coletando a informação e armazenando na variavél res */
  $res = mysqli_query($conexao, $email_check);

  /* Verificando se email existe no banco de dados ou não */
  if(mysqli_num_rows($res) > 0){
    $errors['email'] = "O E-mail utilizado já existe!";
  }
  if(count($erros) === 0){
    $encpass = password_hash($password)
  }

  /*INSERINDO OS DADOS NO BANCO DE DADOS.*/
  $result = mysqli_query($conexao, "INSERT INTO usuarios (nome,email,senha)
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
    <title>Cadastro</title>
</head>
<body>

  
    
  <div id="login-container">
        <h1>Cadastre-se</h1>
        <form action="cadastro.php" method="POST">
            <input type="text" name="nome" id="nome" placeholder="Nome" >
            <input type="email" name="email" id="email" placeholder="E-mail" >
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirmar Senha">
            <input type="submit" value="Cadastrar" name="submit">
            <br>
            <a href="../html/index.html" class="voltar">Voltar</a>
            
        </form>
            <h2> OU </h2>
            <br>
        <div id="naopossuiconta">
            <p>Já possui conta? </p>
            <a href="login.php" id="login">Logar</a>
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