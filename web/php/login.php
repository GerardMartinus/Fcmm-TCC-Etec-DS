<?php
session_start();

if (isset($_POST['logar'])) {

  /*CONETANDO CONFIG.PHP COM O CADASTRO*/
  include_once('config.php');

  /*PEGANDO OS DADOS INSERIDOS NO FORMS.*/
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

  $res = $conexao -> query($sql);

  if(mysqli_num_rows($res) < 1) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    $erro = "<script language='javascript' type='text/javascript'>
    Swal.fire({
    icon: 'error',
    title: 'Login inválido',
    text: 'Insira os dados corretamente ou cadastre-se'
}) </script>";
    header("location: login.php");
}

else{
  $_SESSION['email'] = $email;
  $_SESSION['senha'] = $senha;
  $erro = "<script language='javascript' type='text/javascript'>
  let timerInterval
  Swal.fire({
      color: '#04631d',
      title: 'Login realizado com sucesso!',
      timer: 2000,
      didOpen: () => {
          Swal.showLoading()
          const b = Swal.getHtmlContainer().querySelector('b')
          timerInterval = setInterval(() => {
          b.textContent = Swal.getTimerLeft()
          }, 100)
      },
      willClose: () => {
          clearInterval(timerInterval)
      }
  }).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
      console.log('I was closed by the timer')
  }
  }) </script>";
  header('location: sistema.php');
}


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
  <script src="../js/validar.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../js/fonte.js"></script>
  <script src="../js/contraste-views.js"></script>
  <script src="../js/if-login.js"></script>
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com">
  <link rel="stylesheet" href="http://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css2?family=Roboto=wght@100;300;400;500;700&display=swap">
  <title>Login</title>
</head>

<body>


  <div id="login-container">
  <?php echo "$erro"; ?>
    <h1>Bem-vindo de volta!</h1>
    <form name="login" id="login" onsubmit="return validarLogin()" action="login.php" method="POST" >
      <input type="email" name="email" id="email" placeholder="E-mail">
      <input type="password" name="senha" id="senha" placeholder="Senha">
      <input type="submit" value="Entrar" name="logar" id="logar">
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
</body>

</html>