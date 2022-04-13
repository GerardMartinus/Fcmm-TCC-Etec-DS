<?php
session_start();
include("conexao.php");

$apelido = mysqli_real_escape_string($conexao, $_POST['apelido']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "select count(*) as total from cadastro where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: ../html/cadastroexiste.html');
    exit;
}

$sql = "INSERT INTO cadastro (apelido, email, senha) VALUES ('$apelido', '$email', '$senha')";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../html/cadastro.html');
exit;
?>