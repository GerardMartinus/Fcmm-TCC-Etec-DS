<?php
    // session_start();
    // $erro;
    // $validar;
    // /* print_r($_SESSION); */
    // include_once('config.php');
  
  
    // if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    // {
    //     unset($_SESSION['email']);
    //     unset($_SESSION['senha']);
    //     header('Location: login.php');
    // }
    // $logado = $_SESSION['email'];
  
    // $sql = "SELECT nome, email, nivel FROM usuarios WHERE email = '$logado' ";
    // $res = mysqli_query($conexao, $sql);
  
    // if(mysqli_num_rows($res) > 0){
    //   while($row = mysqli_fetch_assoc($res)){
    //     $nome = $row["nome"]; 
    //     $email = $row["email"];
    //     $nivel = $row["nivel"] ;
    //   }
    // }

    // if (isset($_POST['finalizar'])){
    //     if($nivel <= 1){
    //         $sql = "UPDATE usuarios SET nivel = '2' WHERE email = '$logado'";
    //         $res = mysqli_query($conexao, $sql);
    //         $erro = "<script> Swal.fire({
    //             icon: 'success',
    //             title: 'Você subiu de nível!'
    //         })</script>";
    //         $validar = 1;
    //         header ('Location dashboard.php');
    //     }
    //     else{
    //         $erro = "<script> Swal.fire({
    //             icon: 'success',
    //             title: 'Revisão feita!'
    //         })</script>";
    //         $validar = 1;
    //     }
    // }

    // if(isset($_POST['voltar'])){
    //     header ('Location dashboard.php');
    // }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" href="images/favicon.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Quiz capitulo 1</title>
    <link rel="stylesheet" href="../css/index.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
        <button id="semcontraste" class="semcontraste" href="javascript:void(0);" title="Site Normal">-</button>

        <!-- Site Auto Contraste -->
        <button id="contraste" class="contraste" href="javascript:void(0);" title="Alto contraste">-</button>

        <button name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
        <button name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>

      </div>
    </div>


        <!-- navbar -->
        <nav id="nav-header">
            <a id="logo" href="dashboard.php">
                <img src="../img/logo/logo.png" alt="logo Fale com a minha mão">
            </a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="unidade1.html">Sobre nós</a></li>
                <li><a href="faleconosco.html">Fale conosco</a></li>
            </ul>
        </nav>
    </header>

    <main id="tela-principal-quiz">

        <section id='content-quiz'>
            <h1 id="quiz-titulo">Quiz</h1>
            <?php
                if($validar == 1){
                    echo "<a href='dashboard.php'>Finalizar Nível</a>";
                }
            ?>

            
            <article class='questoes'>
                <figure class='imagemDaQuestao'>
                    <img src="" alt="Img da questao" width="200px" />
                </figure>

                <header class='questao'>
                    <span id='numQuestao'></span>
                    <h2 id='pergunta'></h2>
                </header>

                <div class='corpo'>
                    <ol type='A' id='alternativas'>
                        <li id='a' value='1A' class='respostas' onClick='verificarSeAcertou(this, this)'></li>
                        <li id='b' value='1B' class='respostas' onClick='verificarSeAcertou(this, this)'></li>
                        <li id='c' value='1C' class='respostas' onClick='verificarSeAcertou(this, this)'></li>
                        <li id='d' value='1D' class='respostas' onClick='verificarSeAcertou(this, this)'></li>
                    </ol>
                </div>
            </article>

            <article class='centro' id='instrucoes'>
            </article>

            
                <article id='aviso' class='centro'>
                <div class="botao-quiz"><input type="range" value='1' min='1' max='10' step='1' name="progresso" id="progresso" disabled /></div>
                <div class="botao-quiz"><span id='numero'></span> de <span id='total'></span></div>
                    <form action="quiz1.php" method="POST">
                        <div class="botao-quiz"><input type="submit"  class="botoes-quiz" id="fimBotao" class="fim" value="Finalizar" name="finalizar"></div>
                        <div class="botao-quiz"><input type="submit"  class="botoes-quiz" id="voltarBotao" class="voltar" value="Voltar" name="voltar"></div>
                    </form>
                </article>

            <!-- footer -->
  <footer id="footer">
    <h3>Fale com a minha mão &copy; 2022</h3>
    <p>Site criado para projeto de Tcc</p>
    <ul class="socials">
      <li>Início</li>
      <li>Sobre Nós</li>
      <li>Login</li>
      <li>Cadastro</li>
   </ul>
   <p><a href="https://github.com/GerardMartinus/Fcmm-simples/tree/main/web"><img src="../img/sobre-o-curso/github.svg" height="60px"; width="60px"></a></p>
  </footer>
        </section>

    </main>


    <audio preload src="assets/positive.mp3" id='somAcerto'></audio>
    <audio preload src="assets/negative.mp3" id='somErro'></audio>
    <audio preload src="assets/aplausos.mp3" id='somAplausos'></audio>

    <script src="../js/quiz.js"></script>
    <script src="../js/mobile-navbar.js"></script>
    <script src="../js/font-size.js"></script>

</body>

</html>