<?php
  session_start();
  $erro;
  /* print_r($_SESSION); */
  include_once('config.php');


  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
  }
  $logado = $_SESSION['email'];

  $sql = "SELECT nome, email, nivel FROM usuarios WHERE email = '$logado' ";
  $res = mysqli_query($conexao, $sql);

  if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
      $nome = $row["nome"]; 
      $email = $row["email"];
      $nivel = $row["nivel"] ;
    }
  }

  if(isset($_POST['Nivel1'])){
    if(mysqli_num_rows($res) > 0){
      while($row = mysqli_fetch_assoc($res)){
        $nivel = $row["nivel"];
      }
      if($nivel >= 1){
        header ("Location: ../html/unidade1.html");
      } else {
        $erro = "<script> Swal.fire({
          icon: 'error',
          title: 'Você não está nesse nível ainda!'
      })</script>";
      }
    }

  }

  if(isset($_POST['Nivel2'])){
    if(mysqli_num_rows($res) > 0){
      while($row = mysqli_fetch_assoc($res)){
        $nivel = $row["nivel"];
      }
      if($nivel >= 2){
        header ("Location: quiz2.php");
      } else {
        $erro = "<script> Swal.fire({
          icon: 'error',
          title: 'Você não está nesse nível ainda!'
      })</script>";
      }
    }

  }

  if(isset($_POST ['Nivel3'])){
    $erro = "<script> Swal.fire({
      icon: 'error',
      title: 'Fase indisponível no momento'
      })</script>";
  }

  if(isset($_POST ['Nivel4'])){
    $erro = "<script> Swal.fire({
      icon: 'error',
      title: 'Fase indisponível no momento'
      })</script>";
  }
  if(isset($_POST ['Nivel5'])){
    $erro = "<script> Swal.fire({
      icon: 'error',
      title: 'Fase indisponível no momento'
      })</script>";
  }  
  if(isset($_POST ['Nivel6'])){
    $erro = "<script> Swal.fire({
      icon: 'error',
      title: 'Fase indisponível no momento'
      })</script>";
  }
  if(isset($_POST ['Nivel7'])){
    $erro = "<script> Swal.fire({
      icon: 'error',
      title: 'Fase indisponível no momento'
      })</script>";
  }

  if(isset($_POST ['Nivel8'])){
    $erro = "<script> Swal.fire({
      icon: 'error',
      title: 'Fase indisponível no momento'
      })</script>";
  }

  if(isset($_POST ['Nivel9'])){
    $erro = "<script> Swal.fire({
      icon: 'error',
      title: 'Fase indisponível no momento'
      })</script>";
  }

  if(isset($_POST ['Nivel10'])){
    $erro = "<script> Swal.fire({
      icon: 'error',
      title: 'Fase indisponível no momento'
      })</script>";
  }

  if(isset($_POST ['Nivel11'])){
    $erro = "<script> Swal.fire({
      icon: 'error',
      title: 'Fase indisponível no momento'
      })</script>";
  }

  


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../js/validar.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/index.css">
  <script src="https://kit.fontawesome.com/5d16dedfaf.js" crossorigin="anonymous"></script>
  <script src="../js/contraste.js"></script>
</head>

<body>
  <?php echo $erro; ?>
  
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

    <!-- navbar -->
    <nav>
      <a id="logo" href="dashboard.php"></a>
    <nav id="nav-header">
      <a id="logo" href="../php/dashboard.php">
        <img src="../img/logo/logo.png" alt="logo Fale com a minha mão">
      </a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="sobrenos.html">Sobre nós</a></li>
        <li><a href="faleconosco.html">Fale conosco</a></li>
        <li><a href="#"><?php echo "Olá, " . $nome ?></a></li>
        <li><a href="sair.php">Sair</li>
        <li><a href="faleconosco.html"></a></li>
        
      </ul>
    </nav>
  </header>

  

  <!-- Dashboard Centro -->
  <br>
  <div class="main-dashboard">
    <h1 class="title-dashboard">Capitulos <br> <?php echo "Nível atual: " . $nivel; ?></h1>
    <ul class="cards">
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/home/3.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 1</h2>
            <p class="card_text">
              Alfabeto e Datilogia em libras <br>
              Sinais e Pronomes Pessoais <br>
              Saudações/Cumprimentos <br>
              Sinais de Numerais <br>
              <form action="dashboard.php" method="POST">

              <?php if($nivel == 1){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel1" value="Iniciar" action>';
              } 
              elseif($nivel >= 2){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel1" value="Revisar" action>';
              }
              else{
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel1" value="Não disponível" action>';
              } 
              ?>
              </form>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/home/4.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 2</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <form action="dashboard.php" method="POST">

              <?php if($nivel == 2){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel2" value="Iniciar" action>';
              } 
              elseif($nivel >= 3){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel2" value="Revisar" action>';
              }
              else{
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel2" value="Não disponível" action>';
              } 
              ?>
              </form>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/home/5.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 3</h2>
            <p class="card_text"></p>
            <form action="dashboard.php" method="POST">

              <?php if($nivel == 4){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel3" value="Iniciar" action>';
              } 
              elseif($nivel >= 4){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel3" value="Revisar" action>';
              }
              else{
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel3" value="Não disponível" action>';
              } 
              ?>
              </form>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/Dashboard/6.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 4</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <form action="dashboard.php" method="POST">

            <?php if($nivel == 5){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel4" value="Iniciar" action>';
              } 
              elseif($nivel >= 5){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel4" value="Revisar" action>';
              }
              else{
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel4" value="Não disponível" action>';
              } 
              ?>
              </form>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/Dashboard/8.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 5</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <form action="dashboard.php" method="POST">

            <?php if($nivel == 5){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel5" value="Iniciar" action>';
              } 
              elseif($nivel >= 6){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel5" value="Revisar" action>';
              }
              else{
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel5" value="Não disponível" action>';
              } 
              ?>
              </form>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/Dashboard/9.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 6</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <form action="dashboard.php" method="POST">

            <?php if($nivel == 6){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel6" value="Iniciar" action>';
              } 
              elseif($nivel >= 7){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel6" value="Revisar" action>';
              }
              else{
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel6" value="Não disponível" action>';
              } 
              ?>
              </form>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/Dashboard/10.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 7</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <form action="dashboard.php" method="POST">

            <?php if($nivel == 7){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel7" value="Iniciar" action>';
              } 
              elseif($nivel >= 8){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel7" value="Revisar" action>';
              }
              else{
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel7" value="Não disponível" action>';
              } 
              ?>
              </form>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 8</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <form action="dashboard.php" method="POST">

            <?php if($nivel == 8){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel8" value="Iniciar" action>';
              } 
              elseif($nivel >= 9){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel8" value="Revisar" action>';
              }
              else{
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel8" value="Não disponível" action>';
              } 
              ?>
              </form>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 9</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <form action="dashboard.php" method="POST">

            <?php if($nivel == 9){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel9" value="Iniciar" action>';
              } 
              elseif($nivel >= 10){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel9" value="Revisar" action>';
              }
              else{
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel9" value="Não disponível" action>';
              } 
              ?>
              </form>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 10</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <form action="dashboard.php" method="POST">

            <?php if($nivel == 10){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel10" value="Iniciar" action>';
              } 
              elseif($nivel >= 11){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel10" value="Revisar" action>';
              }
              else{
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel10" value="Não disponível" action>';
              } 
              ?>
              </form>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 11</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <form action="dashboard.php" method="POST">

            <?php if($nivel == 11){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel11" value="Iniciar" action>';
              } 
              elseif($nivel >= 12){
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel11" value="Revisar" action>';
              }
              else{
                echo '<input type="submit" class="btn_dashboard card_btn" name="Nivel11" value="Não disponível" action>';
              } 
              ?>
              </form>
          </div>
        </div>
      </li>
    </ul>
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
  <!-- responsividade da navbar -->
  <script src="../js/mobile-navbar.js"></script>
</body>

</html>