-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Nov-2019 às 21:06
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capivaraplay`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `celular` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nome`, `senha`, `email`, `celular`) VALUES
(1, 'Alexya Viana', '12356', 'alexyaviana@capiravaplay.com', '067984137346'),
(2, 'Kamylla Nogueira', '654321', 'kamynogueira@capiravaplay.com', '067963852741'),
(3, 'Gabriel Teixeira', '123456', 'gabs@capiravaplay.com', '067987654321'),
(4, 'admin', 'adminadmin', 'admin@capiravaplay.com', '067123456789'),
(9, 'Gabs hastad', '147258369', 'gabrie.teixera009@gmail.com', '67981611716'),
(10, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `video`
--

CREATE TABLE `video` (
  `nome_video` varchar(50) NOT NULL,
  `sinopse` varchar(300) NOT NULL,
  `duracao` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `ano` varchar(6) NOT NULL,
  `clas_indicativa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `video`
--

INSERT INTO `video` (`nome_video`, `sinopse`, `duracao`, `link`, `ano`, `clas_indicativa`) VALUES
('Aniversario', 'Esse é um video de homenagem ao nosso amigo querido', 160, 'https://drive.google.com/file/d/1FZCuJE4ndmzCjFsRuxefjPq5SWxFMpM6/view?usp=sharing', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `senha` (`senha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
