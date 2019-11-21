<?php
session_start();
include_once("./../controller/config.php");

if(empty($_POST['email']) || empty($_POST['senha'])){
  header('Location: ./../index.php')
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


  $query = "select usuario_id, usuario from from usuario where email = '{$email}' and senha = md5('{$senha}')";
  $result = mysqli_query($conexao, $query);
  $row = mysqli_num_rows($result);

  if($row == 1){
      $_SESSION['usuario'] = $email;
      header('Location: ./../view/home.php');
      exit();
  } else{
    header('Location: ./../index.php');  
    exit();

  }



