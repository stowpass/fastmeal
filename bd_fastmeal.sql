-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Maio-2019 às 22:37
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastmeal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `id_garcon` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `id_garcon`, `nota`, `status`) VALUES
(1, 2, 10, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapios`
--

CREATE TABLE `cardapios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cardapios`
--

INSERT INTO `cardapios` (`id`, `nome`, `id_categoria`, `descricao`, `valor`, `foto`, `status`) VALUES
(34, 'NovoCSP', 5, 'teste de editação', '67.00', '5ca8ede290792_3406411_1_large.jpg', 1),
(35, 'ton marcelino', 1, 'teste', '2.00', '5ca8ede927a84_vinho-santa-helena-reservado-cabernet-sauvignon_1_1200.jpg', 1),
(36, 'ton marcelino', 6, 'vdWG', '33.00', '5ca8edf012cd9_caipirinha-de-vinho-branco-1455040423541_1207x1920.jpg', 1),
(37, 'CERVEJA BHRAMA', 5, 'A MAIS RUIM', '5.00', '5cb663aceb983_Penguins.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `status`) VALUES
(1, 'Bebidas', 1),
(5, 'Cervejas', 1),
(6, 'Vinhos', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `diarias`
--

CREATE TABLE `diarias` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `diarias`
--

INSERT INTO `diarias` (`id`, `data`) VALUES
(1, '2019-05-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `diarias_prof_mesas`
--

CREATE TABLE `diarias_prof_mesas` (
  `id` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `id_garcon` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `id_diaria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `diarias_prof_mesas`
--

INSERT INTO `diarias_prof_mesas` (`id`, `id_mesa`, `id_garcon`, `id_periodo`, `id_diaria`) VALUES
(1, 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `garcons`
--

CREATE TABLE `garcons` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `garcons`
--

INSERT INTO `garcons` (`id`, `nome`, `id_mesa`, `status`) VALUES
(1, 'MORSA', 1, 1),
(2, 'MARIA', 2, 1),
(3, 'ton marcelino', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_pedidos`
--

CREATE TABLE `itens_pedidos` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_cardapio` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `observacoes` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `itens_pedidos`
--

INSERT INTO `itens_pedidos` (`id`, `id_pedido`, `id_cardapio`, `quantidade`, `observacoes`, `status`) VALUES
(1, 1, 37, 45, '', 'SOLICITADO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesas`
--

CREATE TABLE `mesas` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mesas`
--

INSERT INTO `mesas` (`id`, `nome`, `status`) VALUES
(1, 'MESA  01', 1),
(2, 'MESA 02', 1),
(3, 'MESA 03', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis`
--

CREATE TABLE `niveis` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `niveis`
--

INSERT INTO `niveis` (`id`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Funcionario'),
(3, 'Suporte'),
(4, 'Cozinha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_diaria_prof_mesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_diaria_prof_mesa`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodos`
--

CREATE TABLE `periodos` (
  `id` int(11) NOT NULL,
  `periodo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `periodos`
--

INSERT INTO `periodos` (`id`, `periodo`) VALUES
(1, 'MANHÃ'),
(2, 'TARDE'),
(3, 'NOITE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `id_nivel`, `status`) VALUES
(1, 'ton', '202cb962ac59075b964b07152d234b70', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_garcon_aval` (`id_garcon`);

--
-- Indexes for table `cardapios`
--
ALTER TABLE `cardapios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria` (`id_categoria`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diarias`
--
ALTER TABLE `diarias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diarias_prof_mesas`
--
ALTER TABLE `diarias_prof_mesas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_diaria` (`id_diaria`),
  ADD KEY `fk_garcon` (`id_garcon`),
  ADD KEY `fk_mesa` (`id_mesa`),
  ADD KEY `fk_periodo` (`id_periodo`);

--
-- Indexes for table `garcons`
--
ALTER TABLE `garcons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mesas` (`id_mesa`);

--
-- Indexes for table `itens_pedidos`
--
ALTER TABLE `itens_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pedidos` (`id_pedido`),
  ADD KEY `fk_cardapios` (`id_cardapio`);

--
-- Indexes for table `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `niveis`
--
ALTER TABLE `niveis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_diaria_prof_mesas` (`id_diaria_prof_mesa`);

--
-- Indexes for table `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_niveis` (`id_nivel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cardapios`
--
ALTER TABLE `cardapios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diarias`
--
ALTER TABLE `diarias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diarias_prof_mesas`
--
ALTER TABLE `diarias_prof_mesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `garcons`
--
ALTER TABLE `garcons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `itens_pedidos`
--
ALTER TABLE `itens_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `niveis`
--
ALTER TABLE `niveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `fk_garcon_aval` FOREIGN KEY (`id_garcon`) REFERENCES `garcons` (`id`);

--
-- Limitadores para a tabela `cardapios`
--
ALTER TABLE `cardapios`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `diarias_prof_mesas`
--
ALTER TABLE `diarias_prof_mesas`
  ADD CONSTRAINT `fk_diaria` FOREIGN KEY (`id_diaria`) REFERENCES `diarias` (`id`),
  ADD CONSTRAINT `fk_garcon` FOREIGN KEY (`id_garcon`) REFERENCES `garcons` (`id`),
  ADD CONSTRAINT `fk_mesa` FOREIGN KEY (`id_mesa`) REFERENCES `mesas` (`id`),
  ADD CONSTRAINT `fk_periodo` FOREIGN KEY (`id_periodo`) REFERENCES `periodos` (`id`);

--
-- Limitadores para a tabela `garcons`
--
ALTER TABLE `garcons`
  ADD CONSTRAINT `fk_mesas` FOREIGN KEY (`id_mesa`) REFERENCES `mesas` (`id`);

--
-- Limitadores para a tabela `itens_pedidos`
--
ALTER TABLE `itens_pedidos`
  ADD CONSTRAINT `fk_cardapios` FOREIGN KEY (`id_cardapio`) REFERENCES `cardapios` (`id`),
  ADD CONSTRAINT `fk_pedidos` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_diaria_prof_mesas` FOREIGN KEY (`id_diaria_prof_mesa`) REFERENCES `diarias_prof_mesas` (`id`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_niveis` FOREIGN KEY (`id_nivel`) REFERENCES `niveis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
