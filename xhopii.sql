-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/06/2024 às 04:40
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

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
-- Estrutura para tabela `cliente`
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
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `senha`) VALUES
('510.470.278-28', 'João Pedro', 'Garcia Girotto ', '2006-01-04', '(18) 99123-8584', 'joao.girotto@fatec.sp.gov.br', '0401'),
('123.456.789-90', 'Daniel Corno', 'Dantas Jcometo', '2005-10-31', '(18) 99722-2271', 'daniel.jacometo@fatec.sp.gov.br', '12345678'),
('123.456.789-21', 'Lorena', 'Andrade da Silva', '2020-02-07', '(18) 99878-8541', 'lorena.silva@outlook.com', '123456'),
('987.456.123-78', 'Mayara', 'Andrade Bezerra da Silva', '1992-04-24', '(18) 99684-3970', 'mayara.andrade@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
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

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`nome`, `sobrenome`, `cpf`, `dataDeNascimento`, `telefone`, `cargo`, `salario`, `email`, `senha`) VALUES
('MANOELA', 'DA SILVA', '487.677.598-23', '2006-03-29', '18996816585', 'Escritorio', '2399', 'manoela2903@outllok.com', '0401');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
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
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `fabricante`, `descricao`, `valor`, `quantidade`, `imageSrc`) VALUES
(1, 'Buque de Flores', 'My.inc', 'buque de flores para seu amor', 30, 10, './../../img/produtos/6670fce2632fd-fror.jpeg'),
(2, 'Mario', 'Nivendo Games', 'Mario o Encanador', 250, 22, './../../img/produtos/66721b902520f-mario.jpeg'),
(4, 'Camiseta Programador', 'Use Funny', 'CAMISETA, 100% algodão, impressa em DTG Print.', 65, 5, './../../img/produtos/667231ab76cb5-camisetadev.jpg'),
(6, 'Smartphone XZ-2000', 'TechCo', 'Um smartphone avançado com câmera de 64MP e processador octa-core.', 1900, 30, './../../img/produtos/6672343324f04-cel.png'),
(7, 'Fones de Ouvido Bluetooth XZ-500', 'SoundTech', 'Fones de ouvido sem fio com cancelamento de ruído e alta qualidade sonora.', 290, 10, './../../img/produtos/6672358fc462e-fone.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
