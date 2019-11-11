<?php
// Documentação SQlite: https://www.php.net/manual/pt_BR/book.sqlite3.php
  // Tenta habilitar mensagens de erros no PHP
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  // Configura banco de dados SQLite
  $db = new SQLite3('bancoDados/website.db');

  $db->exec("CREATE TABLE IF NOT EXISTS `Usuarios` (
    `idUsuario` VARCHAR NOT NULL UNIQUE,
    `email` VARCHAR NOT NULL UNIQUE,
    `nome` VARCHAR NOT NULL,
    `password` VARCHAR NOT NULL,
    `telefone` VARCHAR(16) NOT NULL,
    PRIMARY KEY (`idUsuario`) AUTOINCREMENT
  );");
  $db->enableExceptions(true);


  $db->exec(" CREATE TABLE IF NOT EXISTS 'Videos' (
    `idVideo` VARCHAR NOT NULL UNIQUE,
    `ano` VARCHAR NOT NULL,
    `nomeVideo` VARCHAR NOT NULL  UNIQUE,
    `clasIndicativa` INT NOT NULL,
    `duracao` VARCHAR(16) NOT NULL,
    `sinopse` VARCHAR,
    PRIMARY KEY (`idVideo`) AUTOINCREMENT
  );");
  $db->enableExceptions(true);    

?>