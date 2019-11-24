<?php
session_start();
include_once("config.php");

$nome_video = mysqli_real_escape_string($conexao, trim($_POST['nome_video']));
$sinopse = mysqli_real_escape_string($conexao, trim($_POST['sinopse']));
$clas_indicativa = mysqli_real_escape_string($conexao, trim($_POST['clas_indicativa']));
//$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$ano = mysqli_real_escape_string($conexao, trim($_POST['ano']));
$duracao = mysqli_real_escape_string($conexao, trim($_POST['duracao']));
$link = mysqli_real_escape_string($conexao, trim($_POST['link']));


  $sql = "select count(*) as total from video where nome_video = '$nome_video'";
  $result = mysqli_query($sql);
  $row = mysqli_fetch_assoc($result);

  //video já existe erro = video_cadastrado
if($row['total'] != 0){
  $_SESSION['video_cadastrado'] = true;
  header('Location: ./../view/admin.php?erro=video_cadastrado');
  exit(); 
}
//se o formulario ta vazio, warning = empty_form
if(empty($_POST['nome_video']) || empty($_POST['sinopse']) || empty($_POST['clas_indicativa']) || empty($_POST['ano']) || empty($_POST['duracao']) ){
  header('Location: ./../view/admin.php?warning=empty_form');
}
$sql = "INSERT INTO video(nome_video, sinopse, clas_indicativa, ano, duracao) VALUES ('$nome_video', '$sinopse', '$clas_indicativa', '$ano', '$duracao')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
// fazer uma mensagem de sucesso com botão de redirecionamento pra home de admin
header('Location: ./../view/admin.php?sucess=cadastro_concluido');
exit();
?>