<?php
session_start();
include("conexao.php");

$apelido = mysqli_real_escape_string($conexao, $_POST['apelido']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuario (apelido, email, senha) VALUES ('$apelido', '$email', '$senha', NOW())";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>