<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha - mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuario where email = '{$email}' and senha md5('{$senha}')";

?>