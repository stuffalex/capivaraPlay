<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stmt = $db->prepare("INSERT INTO Usuarios (idUsuario,nome,email,password,telefone) VALUES (?,?,?,?,?)");
        $stmt->bindValue(1, $_POST["idUsuario"], SQLITE3_TEXT);
        $stmt->bindValue(2, $_POST["nome"], SQLITE3_TEXT);
        $stmt->bindValue(3, strtolower($_POST["email"]), SQLITE3_TEXT);
        $stmt->bindValue(4, openssl_encrypt($_POST["password"], "aes128", "1234", 0, "1234567812345678"), SQLITE3_TEXT);
        $stmt->bindValue(5, $_POST["telefone"], SQLITE3_TEXT);

        try {
          $result = $stmt->execute();
          header("Location: login.php");
          exit();
        } catch (Throwable $th) {
          echo "<script>alert('Email já cadastrado!');</script>";
        }
      }
       // fazer dentro do body de cadastroS
?>



<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./estilos/cadastro.css">
    <meta charset="utf-8">
	<title>Cadastro CapivaraPlay</title>
</head>
<body> 
	<div id="altura">
		<h2>CAPIVARA PLAY</h2>
	</div>
	<h1>CADASTRO</h1>

	<form action="" method="POST">
		<input name="nome" class="campo" type="text" placeholder="Nome Completo">
		<input name="email" class="campo" type="email" placeholder="Email">
		<input name="senha" class="campo" type="password" placeholder="Senha">
		<input name="celular" class="campo" type="text" placeholder="Celular">
    <button type= "submit" class="botaoLogin" id="botaoLogin">login</button>
		<h4>Já Possui uma conta?<span>Entrar.</span></h4>
	</form>
</body>
</html>
