<?php
  session_start();
  /* print_r($_SESSION); */
  include_once('config.php');


  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
  }
  $logado = $_SESSION['email'];

  $sql = "SELECT nome FROM usuarios WHERE email = '$logado' ";
  $res = mysqli_query($conexao, $sql);

  if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
      $nome = "Olá, " . $row["nome"];
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/index.css">
</head>

<body>
  <header>
    <div class="acessibilidade">
      <div class="btn-container">
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
      <a id="logo" href="index.html"></a>
    <nav id="nav-header">
      <a id="logo" href="index.html">
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
        <li><a href="faleconosco.html"></a></li>

      </ul>
    </nav>
  </header>

  <!-- Dashboard Esquerda -->
  <nav class="main-menu">
    <ul>
      <li>
        <a href="/Fcmm-simples/web/html/dashboard.html">
          <i class="fa fa-home fa-2x"></i>
          <span class="nav-text">
          <?php echo $nome; ?>
          </span>
        </a>

      </li>
      <li>
        <a href="/Fcmm-simples/web/html/dashboard.html">
          <i class="fa fa-home fa-2x"></i>
          <span class="nav-text">
            Dashboard
          </span>
        </a>

      </li>
      <li>
        <a href="#">
          <i class="fa fa-bar-chart-o fa-2x"></i>
          <span class="nav-text">
            Gráficos
          </span>
        </a>
      </li>
    </ul>
    

    <ul class="logout">
      <li>
        <a href="#">
          <i class="fa fa-power-off fa-2x"></i>
          <span class="nav-text">
            Logout
          </span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Dashboard Centro -->

  <div class="main-dashboard">
    <h1>Dashboard</h1>
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
            <input type="submit" class="btn_dashboard card_btn" name="Nivel1" value= "Iniciar">
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/home/4.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 2</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <input type="submit" class="btn_dashboard card_btn" name="Nivel1" value= "Iniciar">
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/home/5.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 3</h2>
            <p class="card_text"></p>
            <input type="submit" class="btn_dashboard card_btn" name="Nivel1" value= "Iniciar">
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/Dashboard/6.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 4</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <input type="submit" class="btn_dashboard card_btn" name="Nivel1" value= "Iniciar">
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/Dashboard/8.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 5</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <input type="submit" class="btn_dashboard card_btn" name="Nivel1" value= "Iniciar">
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/Dashboard/9.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 6</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <input type="submit" class="btn_dashboard card_btn" name="Nivel1" value= "Iniciar">
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="../img/Dashboard/10.jpg"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 7</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <input type="submit" class="btn_dashboard card_btn" name="Nivel1" value= "Iniciar">
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 8</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <input type="submit" class="btn_dashboard card_btn" name="Nivel1" value= "Iniciar">
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 9</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <input type="submit" class="btn_dashboard card_btn" name="Nivel1" value= "Iniciar">
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 10</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <input type="submit" class="btn_dashboard card_btn" name="Nivel1" value= "Iniciar">
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
          <div class="card_content">
            <h2 class="card_title">Capitulo 11</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <input type="submit" class="btn_dashboard card_btn" name="Nivel1" value= "Iniciar">
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