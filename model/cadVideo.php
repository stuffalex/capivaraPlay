<?php
session_start();
include_once("config.php");

$nomeVideo = mysqli_real_escape_string($conexao, trim($_POST['nomeVideo']));
$sinopse = mysqli_real_escape_string($conexao, trim($_POST['sinopse']));
$clasIndicativa = mysqli_real_escape_string($conexao, trim($_POST['clasIndicativa']));
//$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$ano = mysqli_real_escape_string($conexao, trim($_POST['ano']));
$duracao = mysqli_real_escape_string($conexao, trim($_POST['duracao']));

  $sql = "select count(*) as total from video where nomeVideo = '$nomeVideo'";
  $result = mysqli_query($sql);
  $row = mysqli_fetch_assoc($result);

  //video já existe erro = video_cadastrado
if($row['total'] != 0){
  $_SESSION['video_cadastrado'] = true;
  header('Location: ./../view/admin.php?erro=video_cadastrado');
  exit(); 
}
//se o formulario ta vazio, warning = empty_form
if(empty($_POST['nomeVideo']) || empty($_POST['sinopse']) || empty($_POST['clasIndicativa']) || empty($_POST['ano']) || empty($_POST['duracao']) ){
  header('Location: ./../view/admin.php?warning=empty_form');
}
$sql = "INSERT INTO video(nomeVideo, sinopse, clasIndicativa, ano, duracao) VALUES ('$nomeVideo', '$sinopse', '$clasIndicativa', '$ano', '$duracao')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
// fazer uma mensagem de sucesso com botão de redirecionamento pra home de admin
header('Location: ./../view/admin.php?sucess=cadastro_concluido');
exit();
?>