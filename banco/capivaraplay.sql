-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2019 às 14:37
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `capivaraplay`
--

-- --------------------------------------------------------
CREATE DATABASE capivaraplay;
USE capiravaplay;
--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `senha` varchar(25) NOT NULL UNIQUE,
  `email` varchar(40) NOT NULL,
  `celular` varchar(12) NOT NULL, 
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `senha`, `email`, `celular`) VALUES
('Alexya Viana', '123456', 'alexyaviana@capiravaplay.com','067984137346'),
('Kamylla Nogueira', '654321', 'kamynogueira@capiravaplay.com','067963852741'),
('Gabriel Teixeira', '123456', 'gabs@capiravaplay.com', '067987654321'),
('admin', 'adminadmin', 'admin@capiravaplay.com', '067123456789');

-- --------------------------------------------------------

--
-- Estrutura da tabela `video`
--

CREATE TABLE `video` (
  `nome_video` varchar(50) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `duracao` int(11) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `video`
--

INSERT INTO `video` (`nome_video`, `descricao`, `duracao`, `link`) VALUES
('Aniversario', 'Esse é um video de homenagem ao nosso amigo querido', 160, 'https://drive.google.com/file/d/1FZCuJE4ndmzCjFsRuxefjPq5SWxFMpM6/view?usp=sharing');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
