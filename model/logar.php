<?php
session_start();
include_once("config.php");

// se o formulario ta vazio, warning = empty_form
if(empty($_POST['email']) || empty($_POST['senha'])){
  header('Location: ./../index.php?warning=empty_form');
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


  $query = "select usuario_id, email from usuario where email = '{$email}' and senha = '{$senha}'";
  //senha = md5('{$senha}')";
  $result = mysqli_query($conexao, $query);
  $row = mysqli_num_rows($result);
  
  if($row == 1){
      $_SESSION['email'] = $email;
      header('Location: ./../view/home.php');
      exit();
  }
  // usuario nao existe, nao loga na pagina, erro = no_user
  else{
    header('Location: ./../index.php?erro=no_user');  
    exit();

  }



