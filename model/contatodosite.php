<?php
  /* EMAIL QUE RECEBERÁ O CONTATO E ASSUNTO DO EMAIL */
  $destino = "osarquivosdomeupc@gmail.com";
  $assunto = "Contato pelo Site";
  /* ----------------------------------------------- */

  // Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');
	
  // Composição E-mail
  $arquivo = "
  <style type='text/css'>
  p {
    margin-bottom: 20px;
    font-family: Verdane;
    font-size: 16px;
  }
  </style>
  <html lang='pt-br'>
    <p><b>Nome:</b> " . $nome . "</p>
    <p><b>E-mail:</b> " . $email . "</p>
    <p><b>Telefone:</b> " . $telefone . "</p>
    <p><b>Mensagem:</b> " . $mensagem . "</p>
    <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail) {
    echo "<script> sessionStorage.setItem('mensagem', 'E-mail enviado com sucesso!'); </script>";
    echo "<script> window.location.href = 'index.php'; </script>";
    echo "<meta http-equiv='refresh' content='10; URL=index.php'>";
  } else {
    echo "<script> sessionStorage.setItem('mensagem', 'Erro ao enviar e-mail!'); </script>";
    echo "<script> window.location.href = 'index.php'; </script>";
    echo "<meta http-equiv='refresh' content='10; URL=index.php'>";
  }
?>