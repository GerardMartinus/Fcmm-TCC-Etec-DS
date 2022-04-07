<?php
session_start();
include("cadastro.html");

$nome = mysqli_real_escape_string($conexao, $_POST['apelido'])

?>