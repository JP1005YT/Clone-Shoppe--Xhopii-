-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Maio-2024 às 19:27
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
('510.470.278-28', 'João Pedro', 'Garcia Girotto ', '2006-01-04', '(18) 99123-8584', 'joao.girotto@fatec.sp.gov.br', '29032006'),
('123.456.789-90', 'Daniel Corno', 'Dantas Jcometo', '2005-10-31', '(18) 99722-2271', 'daniel.jacometo@fatec.sp.gov.br', '12345678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
