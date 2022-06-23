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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Home</title>
</head>
<body>
    <div id ="teste">
      <?php echo $nome; 
        echo "<script> console.log('HELLO WORLD!') </script>";
      ?>
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