-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jul-2023 às 00:38
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
-- Banco de dados: `db_quitanda`
--
CREATE DATABASE IF NOT EXISTS `db_quitanda` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_quitanda`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `categoria 2` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `foto`, `categoria`, `categoria 2`, `titulo`) VALUES
(1, 'http://localhost/quitanda_php/img/000001.jpg', 'Banana', 'Banana da melhor qualidade possível e muito fresco.', 'Banana');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `msg`) VALUES
(1, 'Daniel Santos', 'danielsplira@gmail.com', 'Gostaria de Saber quando vou receber meus produtos'),
(3, 'Heloisa Dos Santos lira', 'heloisa@gmail.com', 'quer saber quando vai vim meus produtos'),
(4, 'Claudia mendes', 'cladia.mendes@gmail.com', 'quer saber quando vai vim meus produtos'),
(5, 'Paula Maends', 'Paula.mendes@gmail.com', 'quer saber quando vai vim meus produtos'),
(26, '', '', ''),
(27, 'Daniel  Santos', 'danielsplira@gmail.com', 'como fazer o login');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `foto1` varchar(100) NOT NULL,
  `foto2` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `estoque` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `foto`, `foto1`, `foto2`, `titulo`, `categoria`, `video`, `valor`, `estoque`) VALUES
(8, 'http://localhost/quitanda_php/img/000003.jpg', 'http://www.w3.org/2000/svg', 'http://www.w3.org/2000/svg ', 'Mamão Papaia', 'Mamão da melhor qualidade, disponível direto do produtor', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 6,50', '920,5kg em estoque'),
(9, 'http://localhost/quitanda_php/img/000002.jpg', 'http://www.w3.org/2000/svg', ' http://www.w3.org/2000/svg ', 'Abacaxi', 'Abacaxi da melhor qualidade, disponível   direto do produtor pra sua casa', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 9,50', '820,5kg em estoque'),
(10, 'http://localhost/quitanda_php/img/000004.jpg', 'http://www.w3.org/2000/svg', 'http://www.w3.org/2000/svg ', 'Maça', 'Maça da melhor qualidade, disponível   direto do produtor pra sua casa', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 11,50', '520,5kg em estoque'),
(11, 'http://localhost/quitanda_php/img/000005.jpg', 'http://www.w3.org/2000/svg', 'http://www.w3.org/2000/svg ', 'Goiaba', 'Goiaba da melhor qualidade, disponível   direto do produtor pra sua casa', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 7,50', '620,5kg em estoque'),
(12, 'http://localhost/quitanda_php/img/000006.jpg', 'http://www.w3.org/2000/svg', 'http://www.w3.org/2000/svg ', 'Laranja', 'Laranja da melhor qualidade, disponível   direto do produtor pra sua casa', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 6,50', '820,5kg em estoque'),
(13, 'http://localhost/quitanda_php/img/000007.jpg', 'http://www.w3.org/2000/svg', ' http://www.w3.org/2000/svg ', 'Abacate', 'Abacate da melhor qualidade, disponível   direto do produtor pra sua casa', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 6,50', '620,5kg em estoque'),
(14, 'http://localhost/quitanda_php/img/000009.jpg', 'http://www.w3.org/2000/svg', ' http://www.w3.org/2000/svg ', 'Abobora', 'Abobora da melhor qualidade, disponível   direto do produtor pra sua casa', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 9,50', '720,5kg em estoque'),
(15, 'http://localhost/quitanda_php/img/000010.jpg', 'http://www.w3.org/2000/svg', ' http://www.w3.org/2000/svg ', 'Xuxu', 'Xuxu da melhor qualidade, disponível   direto do produtor pra sua casa', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 6,50', '620,5kg em estoque'),
(16, 'http://localhost/quitanda_php/img/000011.jpg', 'http://www.w3.org/2000/svg', 'http://www.w3.org/2000/svg ', 'Alface Liso', 'Alface Liso da melhor qualidade, disponível   direto do produtor pra sua casa', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 11,50', '540,5kg em estoque'),
(17, 'http://localhost/quitanda_php/img/000008.jpg', 'http://www.w3.org/2000/svg', ' http://www.w3.org/2000/svg ', 'Abacate Manteiga', 'Abacate Manteiga da melhor qualidade, disponível   direto do produtor pra sua casa', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 10,50', '520,5kg em estoque'),
(18, 'http://localhost/quitanda_php/img/000012.jpg', 'http://www.w3.org/2000/svg', 'http://www.w3.org/2000/svg ', 'Alho Granel', 'Alho Granel da melhor qualidade, disponível   direto do produtor pra sua casa', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 7,50', '920,5kg em estoque'),
(19, 'http://localhost/quitanda_php/img/000001.jpg ', 'http://www.w3.org/2000/svg', 'http://www.w3.org/2000/svg ', 'Babana', 'Banana da melhor qualidade, disponível direto do produtor', 'http://localhost/quitanda_php/carrinho.php ', 'R$ 9,50', '520,5kg em estoque');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `datanacimento` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `Conf_Senha` varchar(50) NOT NULL,
  `referencia` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `cpf`, `datanacimento`, `email`, `telefone`, `cep`, `rua`, `numero`, `complemento`, `cidade`, `senha`, `Conf_Senha`, `referencia`) VALUES
(26, 'Matheus Bortoletti', '29942396802', '1993-07-13', 'juliana@gmail.com', '(19)98407-8406', '13380-414', 'José Carlos de Oliveira', '8', 'Casa', 'Nova Odessa', 'md5(202cb962ac59075b964b07152d234b70)', 'md5(202cb962ac59075b964b07152d234b70)', ''),
(27, 'Daniel  Santos', '29942396802', '1982-04-24', 'danielsplira@gmail.com', '(19)98407-8406', '13380-414', 'José Carlos de Oliveira', '8', 'Casa', 'Nova Odessa', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
