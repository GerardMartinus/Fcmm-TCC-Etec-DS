<!DOCTYPE html>
<html lang="pt-br" style="overflow-x:hidden;">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="manifest" href="../manifest.json">
  <link rel="stylesheet" href="../css/index.css" />
  

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <script src="http://kit.fontawsome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../js/contraste.js"></script>
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
      <a id="logo" href="index.html">Fale com Minha Mão</a>
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
        <li><a href="../php/login.php">Login</a></li>
        <li><a href="../php/cadastro.php">Cadastro</a></li>
        <li><a href="../php/cadastro.php"></a></li>
      </ul>
    </nav>
  </header>

  <!-- conteudo da home -->

  <article id="home-content">
    <section class="vh100">
      <h1>Fale com a minha mão</h1>
      <p>Este é um curso voltado para quem possui interesse em aprender a Língua Brasileira de Sinais</p>
    </section>

    <section class="vh100">
      <blockquote cite="Paulo Freire">
        <h3>“Se a educação sozinha não transforma a sociedade, sem ela tampouco a sociedade muda.”</h3>
        <p>Paulo Freire</p>
      </blockquote>
    </section>

    <section class="vh100">
      <blockquote cite="John Green">
        <h4>A língua de sinais não são apenas gestos, é conexão!
          Aprenda de forma simplificada e rápida, se conecte ainda mais 
          com as pessoas.
        </h4>
      </blockquote>
    </section>

    <section class="vh100">
      <blockquote cite="Victor Hugo">
        <h4>
          O Fcmm é um curso inovador e ágil adaptado para qualquer pessoa
        </h4>
      </blockquote>
    </section>

    <section class="vh100">
      <h2>Achou interessante? Saiba mais</h2>
      <a href="sobreocurso.html"><button class="btn">
          Saiba mais sobre o curso
        </button>
      </a>
    </section>
  </article>

  <!-- footer -->
  <footer id="footer">
    <h3>Fale com a minha mão &copy; 2022</h3>
    <p>Site criado para projeto de Tcc</p>
    <ul class="socials">
      <li>
        <a href="#instagram">Instagram</a>
      </li>
      <li>
        <a href="#facebook">Facebook</a>
      </li>
    </ul>
    <p><a href="https://github.com/GerardMartinus/Fcmm-simples/tree/main/web">
      <img id="git-icon" src="../img/sobre-o-curso/github.svg" height="60px" ; width="60px">
    </a></p>
  </footer>




  <!-- responsividade da navbar -->
  <script src="../js/mobile-navbar.js"></script>
  <script src="../js/font-size.js"></script>

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