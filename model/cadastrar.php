<?php
session_start();
include_once("config.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
//$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));

  $sql = "select count(*) as total from usuario where usuario = '$email'";
  $result = mysqli_query($sql);
  $row = mysqli_fetch_assoc($result);

  //usuário nao existe erro = no_user
if($row['total'] != 0){
  $_SESSION['usuario_existe'] = true;
  header('Location: ./../view/login.php?erro=exist_user');
  exit(); 
}
//se o formulario ta vazio, warning = empty_form
if(empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['nome']) || empty($_POST['celular']) ){
  header('Location: ./../view/cadastro.php');
   exit();
}

$sql = "INSERT INTO usuario( nome, email, senha, celular) VALUES ('$nome', '$email', '$senha', '$celular')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: ./../index.php');
exit();
?>