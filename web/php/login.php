<?php
if (isset($_POST['submit'])) {
  //  print_r('Nome: ' . $_POST['nome']);
  //  print_r('<br>');
  //  print_r('Email: ' . $_POST['email']);
  //  print_r('<br>');
  //  print_r('Senha: ' . $_POST['senha']);

  /*CONETANDO CONFIG.PHP COM O CADASTRO*/
  include_once('config.php');

  /*PEGANDO OS DADOS INSERIDOS NO FORMS.*/
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  /*INSERINDO OS DADOS NO BANCO DE DADOS.*/
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
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/index.css" />
  <link rel="stylesheet" href="http://fonts.googleapis.com">
  <link rel="stylesheet" href="http://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css2?family=Roboto=wght@100;300;400;500;700&display=swap">
  <title>Login</title>
</head>

<body>
  <header>
  <div class="acessibilidade">
      <div class="btn-container">
        <label class="label-1">Contraste:</label>
        <button name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
        <button name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
      </div>
    </div>

    <!-- navbar -->
    <nav id="nav-header">
      <a id="logo" href="index.html">Fale com Minha Mão</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="unidade1.html">Sobre nós</a></li>
        <li><a href="unidade2.html">Fale conosco</a></li>
        <li><a href="../php/login.php">Login</a></li>
        <li><a href="../php/cadastro.php">Cadastro</a></li>
      </ul>
    </nav>
  </header>


  <div id="login-container">
    <h1>Bem-vindo de volta!</h1>
    <form name="cadastro" id="cadastro" method="POST" onsubmit="return validarCampos()">
      <input type="email" name="email" id="email" placeholder="E-mail">
      <input type="password" name="senha" id="senha" placeholder="Senha">
      <input type="submit" value="Entrar">
      <br>
      <a href="../html/index.html" class="voltar">Voltar</a>

    </form>
    <h2> OU </h2>
    <br>
    <div id="naopossuiconta">
      <p>Não possui conta? </p>
      <a href="cadastro.php" id="login">Registrar-se</a>
    </div>
  </div>
  <!-- Adicionando o VLibras -->
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>

  <div class="ocean">
    <div class="wave"></div>
    <div class="wave"></div>
  </div>

  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../js/fonte.js"></script>
  <script src="../js/contraste-views.js"></script>
  <script src="../js/validarLogin.js"></script>
</body>

</html>