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
            <form action="testlogin.php" method="POST">
              <fieldset>
                <ul>
                  <h2>Login</h2>
                  <li><input type="email" placeholder="Email" name="email" /></li>
                  <li><input type="password" placeholder="Senha" name="senha" /></li>
                  <li><input type="submit" class="btn" name="submit"/></li>
                  <li><p>Não possui cadastro? <a href="cadastro.html">Registre-se</a></p></li>                  
                </ul>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
</body>

</html>