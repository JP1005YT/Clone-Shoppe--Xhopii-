-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2024 às 01:44
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `xhopii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nome` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sobrenome` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `senha` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `senha`) VALUES
('487.677.598-23', 'Manoela', 'Pinheiro da Silva', '2006-03-29', '(18) 99681-6585', 'manoela2903@outlook.com', 'Lisa2903'),
('510.470.278-28', 'João Pedro', 'Garcia Girotto ', '2006-01-04', '(18) 99123-8584', 'joao.girotto@fatec.sp.gov.br', '0123'),
('123.456.789-90', 'Daniel Corno', 'Dantas Jcometo', '2005-10-31', '(18) 99722-2271', 'daniel.jacometo@fatec.sp.gov.br', '12345678'),
('123.456.789-21', 'Lorena', 'Andrade da Silva', '2020-02-07', '(18) 99878-8541', 'lorena.silva@outlook.com', '123456'),
('987.456.123-78', 'Mayara', 'Andrade Bezerra da Silva', '1992-04-24', '(18) 99684-3970', 'mayara.andrade@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `cpf` varchar(18) NOT NULL,
  `dataDeNascimento` date NOT NULL,
  `telefone` varchar(18) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `salario` varchar(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `valor` double NOT NULL,
  `quantidade` int(11) NOT NULL,
  `imageSrc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `fabricante`, `descricao`, `valor`, `quantidade`, `imageSrc`) VALUES
(1, 'Buque de Flores', 'My.inc', 'buque de flores para seu amor', 30, 10, './../../img/produtos/6670fce2632fd-fror.jpeg'),
(2, 'Mario', 'Nivendo Games', 'Mario o Encanador', 250, 22, './../../img/produtos/66721b902520f-mario.jpeg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
