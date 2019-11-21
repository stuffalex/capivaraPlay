<?php
session_start();
include_once("config.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));

  $sql = "select count(*) as total from usuario where usuario = '$email'";
  $result = mysqli_query($sql);
  $row = mysqli_fetch_assoc($result);

if($row['total'] != 0){
  $_SESSION['usuario_existe'] = true;
  header('Location: ./../view/cadastro.php');
  exit(); 
}

$sql = "INSERT INTO usuario(nome, email, senha, celular) VALUES ('$nome', '$email', '$senha', '$celular')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: ./../view/cadastro.ph');
exit();
?>