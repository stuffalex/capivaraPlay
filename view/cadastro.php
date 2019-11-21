<?php
session_start();
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

	<form action="./../model/cadastrar.php" method="POST">
		<input name="nome" class="campo" type="text" placeholder="Nome Completo">
		<input name="email" class="campo" type="email" placeholder="Email">
		<input name="senha" class="campo" type="password" placeholder="Senha">
		<input name="celular" class="campo" type="text" placeholder="Celular">
    <button type= "submit" class="botaoLogin" id="botaoLogin">Cadastrar</button>
		<a href="./login.php"> <h4>Já Possui uma conta?<span>Entrar.</span></h4></a>
	</form>
</body>
</html>
