-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Nov-2022 às 13:58
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `alunos`
--
CREATE DATABASE IF NOT EXISTS `alunos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `alunos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_login`
--

DROP TABLE IF EXISTS `adm_login`;
CREATE TABLE IF NOT EXISTS `adm_login` (
  `id_login_adm` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `senha` varchar(300) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_login_adm`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `adm_login`
--

INSERT INTO `adm_login` (`id_login_adm`, `nome`, `senha`) VALUES
(1, 'dieimes', '1234'),
(2, 'mudar', '$2y$10$7Mn6Ly0ZLaDZLxB9ixSd7ur/4mTkUOojxWzZ/y/aQC0/zvo1ViZmC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade_alunos_sesc`
--

DROP TABLE IF EXISTS `atividade_alunos_sesc`;
CREATE TABLE IF NOT EXISTS `atividade_alunos_sesc` (
  `id_atividade` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `senha` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_atividade`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `produto` varchar(100) COLLATE utf8_bin NOT NULL,
  `pedido` varchar(300) COLLATE utf8_bin NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `nome`, `email`, `produto`, `pedido`, `data`) VALUES
(2, 'Teste 21', 'teste2@teste2', 'TÃŠNIS NMD_R1', 'teste 2 ', '2022-10-16 18:33:08'),
(3, 'teste3', 'teste3@teste3', 'TÃŠNIS FORUM BOLD', 'teste3', '2022-10-16 18:34:01'),
(5, 'teste 5', 'teste5@teste5', 'TÊNIS FORUM BOLD', 'teste5', '2022-10-16 18:51:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(300) NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `produto`) VALUES
(1, 'TÊNIS ULTRA 4DFWD'),
(2, 'TÊNIS ADIZERO ADIOS PRO 3'),
(3, 'TÊNIS NMD_R1'),
(4, 'TÊNIS FORUM BOLD'),
(5, 'TÊNIS SUPERSTAR'),
(6, 'TENIS W NIKE REACT INFINITY RUN FK 3'),
(7, 'Tênis Nike Air Max 90 SE Feminino'),
(8, 'TENIS NIKE REVOLUTION 6'),
(9, 'TENIS W NSW AF1 AF1'),
(10, 'TENIS W NIKE CRATER IMPACT'),
(11, 'Sandálias de bolinhas com decoração de arco'),
(12, 'Sandália Nike Infantil- Confortavel'),
(13, 'Sandália Feminina Infantil- Confortavel'),
(14, 'Tenis azul Infantil - Confortavel'),
(15, 'Tênis azul Infantil - Confortavel'),
(16, 'Tênis Preto Infantil- Confortavel'),
(17, 'Tênis tricae menina corações rosa'),
(18, 'Tênis Infantil Mz Flex Menino Dinossauro Rex/Verde'),
(19, 'Tênis Tricae Menino Listras Caramelo'),
(20, 'Tênis  Infantil- Confortavel'),
(21, 'Tênis Nike Air Max Excee - Preto'),
(22, 'Air Max Sportswear'),
(23, 'Tênis Nike Air Force 1'),
(24, 'Tênis WMNS Air Jordan 1 Low RE'),
(25, 'Tênis Jordan 1 Mid'),
(26, 'Air Max Dawn'),
(27, 'Tênis Nike Downshifter 11'),
(28, 'Air Max Dawn'),
(29, 'Tênis Nike Sportswear Air Max'),
(30, 'Tênis Nike Air Zoom Pegasus');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
