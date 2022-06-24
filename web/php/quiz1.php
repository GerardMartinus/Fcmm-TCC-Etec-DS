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

    if (isset($_POST['finalizar'])){
        if($nivel >= 1){
            $sql = "UPDATE usuarios SET nivel = '2' WHERE email = '$logado'";
            $res = mysqli_query($conexao, $sql);
            $erro = "<script> Swal.fire({
                icon: 'success',
                title: 'Você subiu de nível!'
            })</script>";
        }
        else{
            $erro = "<script> Swal.fire({
                icon: 'success',
                title: 'Revisão feita!'
            })</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" href="images/favicon.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz capitulo 1</title>
    <link rel="stylesheet" href="../css/index.css" />
</head>

<body>
<?php echo $erro; ?>
    <header>
        <div class="acessibilidade">
            <div class="btn-container">
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
                <li><a href="unidade1.html">Sobre nós</a></li>
                <li><a href="faleconosco.html">Fale conosco</a></li>
            </ul>
        </nav>
    </header>

    <main id="tela-principal-quiz">
        <section id='content-quiz'>
            <h1 id="quiz-titulo">Quiz</h1>
            
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

            <form action="quiz1.php" method="POST">
                <article id='aviso' class='centro'>
                    <input type="range" value='1' min='1' max='10' step='1' name="progresso" id="progresso" disabled /> <br>
                    <span id='numero'></span> de <span id='total'></span> <br>
                    <input type="submit" onclick="fimDeJogo()" id="fimBotao" class="fim" value="Finalizar" name="finalizar">
                    <input type="submit" onclick="retornar()" id="voltarBotao" class="voltar" value="Voltar" name="voltar">
                    <button onclick="fimDeJogo()" id="fimBotao" class="fim"></button>
                    <button onclick="retornar()" id="voltarBotao" class="voltar">Voltar</button>
                </article>
            </form>

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