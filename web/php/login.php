<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bruno Martins de Morais Silva, Arthur Souto, Gabriel Santos, Ana Luisa, Igor">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
  <div id="login-container">
    <h1>Bem-vindo de volta!</h1>
    <form action="testlogin.php" method="POST">          
        <input type="email" placeholder="Email" name="email" />
        <input type="password" placeholder="Senha" name="senha" />
        <input type="submit" class="btn" name="submit" value="Logar"/>
                   
    </form>
    <h2>OU</h2>
    <br>
    <div id="naopossuiconta">
          <p>Não possui cadastro?</p>
          <a href="cadastro.php" id="login">Registre-se</a>       
        </div>
        <br><br>
        <a href="esqueceusenha.php" id="login">Esqueci minha senha</a>
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