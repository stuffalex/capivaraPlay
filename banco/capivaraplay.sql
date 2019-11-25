-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2019 às 03:53
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
(10, 'Alexya Moraes', '123', 'alexyavianaa@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `video`
--

CREATE TABLE `video` (
  `id_video` int(20) NOT NULL,
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

INSERT INTO `video` (`id_video`, `nome_video`, `sinopse`, `duracao`, `link`, `ano`, `clas_indicativa`) VALUES
(1, 'Venom', 'O jornalista Eddie Brock desenvolve forÃ§a e poder sobre-humanos quando seu corpo se funde com o alienÃ­gena Venom. Dominado pela raiva, Venom tenta controlar as novas e perigosas habilidades de Eddie.', 85, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/dce5RNg4G_4\" frameborder=\"0\" all', '2019', 18),
(2, 'OS FAROFEIROS', 'filme brasileiro', 101, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aOF0vdvoD7k\" frameborder=\"0\" all', '2018', 0),
(3, 'A JUSTICEIRA', 'aÃ§ao', 101, 'https://www.youtube.com/watch?v=SVibxQOt_Ow <iframe width=\"560\" height=\"315\" src=\"https://www.youtub', '2019', 18),
(4, 'O PREÃ‡O DO AMANHA', 'AA', 120, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/euQrskSt1eY\" frameborder=\"0\" all', '2002', 16),
(5, 'O MENINO VELOZ', 'blabla', 130, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Uf0Gqr7YwUw\" frameborder=\"0\" all', '2018', 12),
(6, 'O COMEÃ‡O DE UM GRANDE AMOR', 'blabla', 99, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zHUJWxs9hb4\" frameborder=\"0\" all', '2019', 12),
(7, 'A OUTRA FILHA', 'blabla', 94, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lSqDzJgedRI\" frameborder=\"0\" all', '2019', 18),
(8, 'CORGI: TOP DOG', 'CACHORRO DA RAINHA', 6, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/SOwhByDbiWI\" frameborder=\"0\" all', '2019', 85),
(9, 'ELA Ã‰ O CARA', 'blabla', 65, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Qhb81UhgvvY\" frameborder=\"0\" all', '2019', 12),
(10, 'SOCORRO VIREI UMA GAROTA', '', 0, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2r4CTuhfaKc\" frameborder=\"0\" all', '', 12);

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
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
