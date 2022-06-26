<?php
$erro;
include_once('config.php');
if (isset($_POST['cadastrar'])) {


    /* print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    print_r('Senha: ' . $_POST['senha']); */

  /*CONETANDO CONFIG.PHP COM O CADASTRO*/
  

  /*PEGANDO OS DADOS INSERIDOS NO FORMS.*/
  $nome = $_POST['nome'];
  $email = $_POST['email'];

  /* CRIPTOGRAFANDO SENHA */
  $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


  /* CHECANDO SE O EMAIL EXISTE OU NÃO */
  $email_check = "SELECT * FROM usuarios WHERE email = '$email' ";
  
  /* RODANDO A QUERY DO $EMAIL_CHECK */
  $res = mysqli_query ($conexao, $email_check);


  
  
  
  
  if (mysqli_num_rows($res) > 0) {
    $erro = "<script> 
      Swal.fire({
        icon: 'error',
        title: 'Email já cadastrado'
      })
    </script>";

  } else{
    $erro = "<script language='javascript' type='text/javascript'>
    let timerInterval
    Swal.fire({
        icon: 'success'
        title: 'Cadastro realizado com sucesso!',
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
    $res = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha, nivel) VALUES ('$nome', '$email', '$senha', '1')");
    header("location: login.php");
    
  }

    }



  /*INSERINDO OS DADOS NO BANCO DE DADOS.*/
/*   $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha)
  VALUES ('$nome', '$email', '$senha')"); */

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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="../css/index.css">
  
  <link rel="stylesheet" href="http://fonts.googleapis.com">
  <link rel="stylesheet" href="http://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css2?family=Roboto=wght@100;300;400;500;700&display=swap">
  <title>Cadastro</title>
</head>

<header>
    <div class="acessibilidade">
      <div class="btn-container">
        <label class="label-1"><a href="#home-content" accesskey="1" title="Ir para contéudo da página">Ir para o conteúdo [1]</a></label>
        <label class="label-1"><a href="#nav" accesskey="2" title="Ir para o menu de navegação">Ir para menu [2]</a></label>
        <label class="label-1"><a href="#footer" accesskey="3" title="Ir para o rodapé">Ir para o rodapé [3]</a></label>
        <label class="label-1"><a href="acessibilidade.html">ACESSIBILIDADE</a></label>
        <label class="label-1">Contraste:</label>

        <!-- Site Normal -->
        <button id="semcontraste" class="semcontraste" title="Site Normal">-</button>

        <!-- Site Auto Contraste -->
        <button id="contraste" class="contraste" title="Alto contraste">-</button>

        <button name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
        <button name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>

      </div>
    </div>
  </header>

<body>

  


  <div id="login-container">
    <h1>Bem-Vindo</h1>
    <?php echo "$erro"; ?>
    <form name="cadastro" id="cadastro"  onsubmit="return validarCampos()" action="cadastro.php" method="POST">
      <input type="text" name="nome" id="nome" placeholder="Nome">
      <input type="email" name="email" id="email" placeholder="E-mail">
      <input type="password" name="senha" id="senha" placeholder="Senha">
      <input type="password" name="confirmar" id="confirmar" placeholder="Confirmar Senha">
      <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
      <br>
      <a href="../html/index.html" class="btn">Voltar</a>

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

  <div class="ocean">
    <div class="wave"></div>
    <div class="wave"></div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../js/contraste-views.js"></script>
  <script src="../js/if-login.js"></script>
  <script src="../js/font-size.js"></script>
</body>

</html>