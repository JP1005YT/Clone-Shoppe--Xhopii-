-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Set-2024 às 20:45
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
('510.470.278-28', 'João Pedro', 'Garcia Girotto ', '2006-01-04', '(18) 99123-8584', 'joao.girotto@fatec.sp.gov.br', '0401'),
('123.456.789-90', 'Daniel Corno', 'Dantas Jcometo', '2005-10-31', '(18) 99722-2271', 'daniel.jacometo@fatec.sp.gov.br', '12345678'),
('123.456.789-21', 'Lorena', 'Andrade da Silva', '2020-02-07', '(18) 99878-8541', 'lorena.silva@outlook.com', '123456'),
('987.456.123-78', 'Mayara', 'Andrade Bezerra da Silva', '1992-04-24', '(18) 99684-3970', 'mayara.andrade@gmail.com', '1234'),
('()', '()', '()', '0000-00-00', '()', '()', '()'),
('()', '()', '()', '0000-00-00', '()', '()', '()'),
('()', '()', '()', '0000-00-00', '()', '()', '()'),
('()', '()', '()', '0000-00-00', '()', '()', '()'),
('()', '()', '()', '0000-00-00', '()', '()', '()'),
('()', '()', '()', '0000-00-00', '()', '()', '()'),
('()', '()', '()', '0000-00-00', '()', '()', '()'),
('()', '()', '()', '0000-00-00', '()', '()', '()'),
('123456789', 'teste', 'teste2', '2000-09-06', 'teste@gmail.com', '', '123456'),
('123456789', 'teste', 'teste2', '2000-09-06', 'teste@gmail.com', '', '123456'),
('123456789', 'teste', 'teste2', '2000-09-06', '(18)998765-4321', 'teste@gmail.com', '123456'),
('123456789', 'teste', 'teste2', '2000-09-06', '(18)998765-4321', 'teste@gmail.com', '123456');

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

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`nome`, `sobrenome`, `cpf`, `dataDeNascimento`, `telefone`, `cargo`, `salario`, `email`, `senha`) VALUES
('MANOELA', 'DA SILVA', '487.677.598-23', '2006-03-29', '18996816585', 'Escritorio', '2399', 'manoela2903@outllok.com', '0401'),
('teste', 'teste4', '09812345687', '2000-03-29', '(18) 99821-5465', 'Entregador', '1200', 'teste2@gmail.com', '12345678'),
('teste', 'teste4', '09812345687', '2000-03-29', '(18) 99821-5465', 'Entregador', '1200', 'teste2@gmail.com', '12345678'),
('arthur', 'oda', '123098456', '2006-03-29', '(18) 99761-2341', 'Escritorio', '14000', 'arthur.oda@gmail.com', 'batata');

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
  `imageSrc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `fabricante`, `descricao`, `valor`, `quantidade`, `imageSrc`) VALUES
(1, 'Buque de Flores', 'My.inc', 'buque de flores para seu amor', 30, 10, './../../view/img/produtos/6670fce2632fd-fror.jpeg'),
(2, 'Mario', 'Nivendo Games', 'Mario o Encanador', 250, 22, './../../view/img/produtos/66721b902520f-mario.jpeg'),
(6, 'Smartphone XZ-2000', 'TechCo', 'Um smartphone avançado com câmera de 64MP e processador octa-core.', 1900, 30, './../../view/img/produtos/6672343324f04-cel.png'),
(7, 'Fones de Ouvido Bluetooth XZ-500', 'SoundTech', 'Fones de ouvido sem fio com cancelamento de ruído e alta qualidade sonora.', 290, 10, './../../view/img/produtos/6672358fc462e-fone.png'),
(10, 'FLOR DE PLASTICO', 'sla', 'flor de plastico', 5, 10, './../../view/img/produtos/66db4d7c44326-florDePlastico.jpg');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
