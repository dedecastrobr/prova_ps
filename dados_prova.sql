-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 24/11/2016 às 00:28
-- Versão do servidor: 10.0.17-MariaDB
-- Versão do PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prova_ps`
--
CREATE DATABASE IF NOT EXISTS `prova_ps` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `prova_ps`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE `contatos` (
  `idcontato` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `contatos`
--

INSERT INTO `contatos` (`idcontato`, `nome`, `telefone`, `email`) VALUES
(2, 'Andre Castro', '', 'dedecastrobr@gmail.com'),
(3, 'Ana Fernandes de Castro', '5193930293', 'aninha@gmail.com'),
(4, 'Vitoria Borges', '51 283748272', 'vaibemnaprova@quasedeferias.com'),
(5, 'Pato Donald', NULL, 'duck@quack.com'),
(6, 'Mickey Mouse', '2738273811', 'themouse@disney.com'),
(7, 'Joao Nogueira', '', 'nonamadeira@samba.com'),
(8, 'Conecrew', NULL, 'chamaosmuleke@mail.com');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`idcontato`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
