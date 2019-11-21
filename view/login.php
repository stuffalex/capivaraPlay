<?php
session_start();
?>
        
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./view/estilos/estiloLogin.css">
    <meta charset="utf-8">
</head>
    <body>
        <h1>CAPIVARA PLAY</h1>
        <div class="icone">
            <img src="./view/images/capybara-head.png">
        </div>
      <form action = "./model/logar.php" method = "POST">
        <input name = "email" class="campo" type="text" placeholder="e-mail">
        <a href="./view/cadastro.php"><h4>Nao possui uma conta?</h4></a>

        <input name = "senha" class="campo" type="password" placeholder="senha">
        <h4>Esqueceu sua senha?</h4>

        <button type="submit" class="botaoLogin" id="botaoLogin">login</button>
        <form>
    </body>
</html>    
