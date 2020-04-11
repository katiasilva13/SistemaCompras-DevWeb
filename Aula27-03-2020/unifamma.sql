-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/03/2020 às 00:44
-- Versão do servidor: 10.1.37-MariaDB
-- Versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `unifamma`
--
CREATE DATABASE IF NOT EXISTS `unifamma` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `unifamma`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nomeProduto` varchar(150) NOT NULL,
  `qtd` int(9) NOT NULL,
  `precoCompra` double NOT NULL,
  `precoVenda` double NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `dataAlteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Despejando dados para a tabela `produto`
--

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nomeProduto`, `qtd`, `precoCompra`, `precoVenda`, `dataCadastro`, `dataAlteracao`, `ativo`) VALUES
(1, 'Batata', 30, 2.5, 6, '0000-00-00 00:00:00', '2020-04-03 21:18:57', 0),
(2, 'Cenoura', 30, 3, 5, '0000-00-00 00:00:00', '2020-04-04 00:46:51', 1),
(3, 'Mandioca', 20, 3.75, 4.75, '0000-00-00 00:00:00', '2020-04-03 21:18:57', 1),
(4, 'Maçã', 30, 3, 5, '0000-00-00 00:00:00', '2020-04-04 00:46:51', 1),
(5, 'Abacaxi', 20, 3.75, 4.75, '0000-00-00 00:00:00', '2020-04-03 21:18:57', 1);
-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `dataAlteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `login`, `senha`, `dataCadastro`, `dataAlteracao`, `ativo`) VALUES
(1, 'Arthur Florindo', 'arthurflorindo@hotmail.com', 'arthur.florindo', '789', '0000-00-00 00:00:00', '2020-04-03 21:18:57', 0),
(2, 'William Testes', 'william@hotmail.com', 'william.tete', '159', '0000-00-00 00:00:00', '2020-04-04 00:46:51', 0),
(4, 'Carlos Danilo', 'carlos.danilo@unifamma.edu.br', 'carlos danilo', '123456', '0000-00-00 00:00:00', '2020-04-03 21:18:57', 0),
(9, 'Diego Scobar', 'diego.uni@unifamma.edu.br', 'diego.unifamma', '123', '0000-00-00 00:00:00', '2020-04-03 21:18:57', 0),
(11, 'Marcelo Lessa', 'marcelo.uni@unifamma.edu.br', 'marcelo.unifamma', '123', '0000-00-00 00:00:00', '2020-04-03 21:18:57', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
