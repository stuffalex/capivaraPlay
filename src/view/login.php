<?php
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["email"]) && isset($_POST["password"])) {
              $stmt = $db->prepare("SELECT * FROM Usuarios WHERE email = ? AND password = ?");
              $stmt->bindValue(1, strtolower($_POST["email"]), SQLITE3_TEXT);
              $stmt->bindValue(2, openssl_encrypt($_POST["password"], "aes128", "1234", 0, "1234567812345678"), SQLITE3_TEXT);
              $usuario = $stmt->execute()->fetchArray();
              if ($usuario) {
                $_SESSION["usuario"] = $usuario;
                header("Location: index.php");
                exit();
              }
            }
            echo "<script>alert('Usuário ou senha invalidos!');</script>";
          } else {
            if (isset($_SESSION["usuario"])) {
              echo "<div class=\"center-align\"><i class=\"large material-icons teal-text\">arrow_upward</i></div>";
              die();
            }
          }
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

        <input class="campo" type="text" placeholder="e-mail">
        <a href="./view/cadastro.php"><h4>Nao possui uma conta?</h4></a>

        <input class="campo" type="password" placeholder="senha">
        <h4>Esqueceu sua senha?</h4>

        <button type="submit" class="botaoLogin" id="botaoLogin">login</button>
    </body>
</html>    
