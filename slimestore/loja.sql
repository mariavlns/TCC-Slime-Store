-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2022 às 09:36
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_Cliente` int(11) NOT NULL,
  `nomecliente` varchar(100) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `endereço` varchar(100) NOT NULL,
  `datanascimento` date NOT NULL,
  `cpf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_Cliente`, `nomecliente`, `telefone`, `email`, `senha`, `endereço`, `datanascimento`, `cpf`) VALUES
(1, 'leonardo ribeiro', 2147483647, 'leonardoribeirosantos12@gmail.com', 'senhaadm', 'rua mato grosso', '2004-01-28', 1401345678),
(3, 'maria', 2147483647, 'maria@gmail.com', '1234', 'rua berdeu as bota', '2002-02-22', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` varchar(100) DEFAULT NULL,
  `descrição` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_Cliente` int(11) DEFAULT NULL,
  `nome` varchar(0) DEFAULT NULL,
  `CPF` int(11) DEFAULT NULL,
  `fone` int(11) DEFAULT NULL,
  `endereço` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_Formecerdor` int(11) NOT NULL,
  `nome_empresa` varchar(100) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `nome_vendedor` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `cnpj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `roupa`
--

CREATE TABLE `roupa` (
  `id_Roupa` int(11) NOT NULL,
  `produto_nome` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `tamanho` varchar(50) NOT NULL,
  `custo` int(11) NOT NULL,
  `preço` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `roupas_categoria`
--

CREATE TABLE `roupas_categoria` (
  `id_Roupas_Categoria` int(11) NOT NULL,
  `Roupa_id_Roupa` int(11) NOT NULL,
  `categoria_id_Categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_Cliente`);

--
-- Índices para tabela `roupa`
--
ALTER TABLE `roupa`
  ADD PRIMARY KEY (`id_Roupa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
