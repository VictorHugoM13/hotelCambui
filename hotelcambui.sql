-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 28-Nov-2021 às 13:37
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hotelcambui`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_carousels`
--

DROP TABLE IF EXISTS `sts_carousels`;
CREATE TABLE IF NOT EXISTS `sts_carousels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `posicao_text` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo_botao` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordem` int(11) NOT NULL,
  `adms_cor_id` int(11) DEFAULT NULL,
  `adms_sit_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_carousels`
--

INSERT INTO `sts_carousels` (`id`, `nome`, `imagem`, `titulo`, `descricao`, `posicao_text`, `titulo_botao`, `link`, `ordem`, `adms_cor_id`, `adms_sit_id`, `created`, `modified`) VALUES
(1, 'GRADUAÇÃO PRESENCIAL', 'imagem_um.jpg', 'Hotel Extrema', 'Realize um experiência incrível!', 'text-left', 'Relize uma reserva!', 'http://localhost/siteHotel/Reservas', 1, 5, 1, '2018-05-23 00:00:00', '2020-08-19 12:23:35'),
(2, 'Segundo Exemplo', 'imagem_dois.jpg', 'Hotel Cambuí', 'O mais completo da cidade! ', 'text-left', 'Relize uma reserva!', 'http://localhost/siteHotel/Reservas', 2, 5, 1, '2018-05-23 00:00:00', '2020-08-20 23:21:04'),
(3, 'Terceiro Exemplo', 'imagem_tres.jpg', 'Hotel Cambuí', 'Descanse no melhor lugar da cidade!', 'text-left', 'Relize uma reserva!', 'http://localhost/siteHotel/Reservas', 3, 5, 1, '2018-05-23 00:00:00', '2020-08-19 23:31:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_historia`
--

DROP TABLE IF EXISTS `sts_historia`;
CREATE TABLE IF NOT EXISTS `sts_historia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `imagem` varchar(40) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sts_historia`
--

INSERT INTO `sts_historia` (`id`, `titulo`, `imagem`, `descricao`) VALUES
(1, 'Nosso Hotel', 'nosso_hotel.jpg', '10 anos de boas vindas calorosas...\r\nSua opção de um lugar simples mas com conforto e aconchego nas montanhas\r\n\r\nTradicional hotel de Cambuí, situado a 200 metros do centro, nosso hotel vem sendo sempre renovando para melhor atender seus hospedes, elevando a qualidade da sua experiência conosco. Nossa proposta é proporcionar uma acolhida confortável e intimista. Nosso hotel dispõe de recepção 24h, sala de leitura, lounge-bar, sala de TV com lareira, salão de jogos com mesas de bilhar e tênis de mesa, piscina coberta e solarium.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_servicos`
--

DROP TABLE IF EXISTS `sts_servicos`;
CREATE TABLE IF NOT EXISTS `sts_servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `icone_um` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nome_um` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_um` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `icone_dois` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nome_dois` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_dois` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `icone_tres` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nome_tres` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_tres` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sts_servicos`
--

INSERT INTO `sts_servicos` (`id`, `titulo`, `icone_um`, `nome_um`, `descricao_um`, `icone_dois`, `nome_dois`, `descricao_dois`, `icone_tres`, `nome_tres`, `descricao_tres`, `created`, `modified`) VALUES
(1, 'Serviços', 'icon ion-wifi', 'Wi-Fi', 'Wi-Fi rápido e grátis para todos os hópedes!', 'icon ion-coffee', 'Alimentação', 'Café da manhã, almoço e jantar!', 'icon ion-ios-sunny', 'Lazer', 'Muita diversão com salão de jogos, piscina e muito mais para os hóspedes!', '2018-05-23 00:00:00', '2020-08-19 23:05:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_sobre`
--

DROP TABLE IF EXISTS `sts_sobre`;
CREATE TABLE IF NOT EXISTS `sts_sobre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_principal` varchar(255) NOT NULL,
  `titulo_secundario_um` varchar(255) NOT NULL,
  `descricao_um` varchar(255) NOT NULL,
  `imagem_um` varchar(255) NOT NULL,
  `titulo_secundario_dois` varchar(255) NOT NULL,
  `descricao_dois` varchar(255) NOT NULL,
  `imagem_dois` varchar(255) NOT NULL,
  `titulo_secundario_tres` varchar(255) NOT NULL,
  `descricao_tres` varchar(255) NOT NULL,
  `imagem_tres` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sts_sobre`
--

INSERT INTO `sts_sobre` (`id`, `titulo_principal`, `titulo_secundario_um`, `descricao_um`, `imagem_um`, `titulo_secundario_dois`, `descricao_dois`, `imagem_dois`, `titulo_secundario_tres`, `descricao_tres`, `imagem_tres`) VALUES
(1, 'Sobre o Hotel', 'Quartos', 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'sobre_um.jpg', 'Restaurante', 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'sobre_dois.jpg', 'Lazer', 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'sobre_tres');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` char(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id`, `cpf`, `nome`, `email`, `senha`) VALUES
(1, '11879934680', 'Victor', 'victor_osk8@hotmail.com', '123'),
(2, '11879934680', 'joao', 'joao@gmail.com', '123'),
(3, '11879934680', 'Victor', 'victor_osk8@hotmail.com', '123'),
(4, '11879934680', 'Victor', 'victor_osk8@hotmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_quarto`
--

DROP TABLE IF EXISTS `tb_quarto`;
CREATE TABLE IF NOT EXISTS `tb_quarto` (
  `numero_quarto` char(2) NOT NULL,
  `tipo_quarto` varchar(30) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor_diaria` float DEFAULT NULL,
  `capacidade_quarto` int(11) DEFAULT NULL,
  `status_quarto` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`numero_quarto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_quarto`
--

INSERT INTO `tb_quarto` (`numero_quarto`, `tipo_quarto`, `descricao`, `valor_diaria`, `capacidade_quarto`, `status_quarto`) VALUES
('1', 'Suite Solteiro', 'Um quarto simples mas muito aconchegante com uma cama solteiro, suite, serviços como TV a Cabo, wifi inclusos', 100, 1, 'disponivel'),
('2', 'Suite Casal', 'Um quarto simples mas com muito conforto para o casal com uma cama de casal, suite, serviços como TV a Cabo, wifi inclusos', 150, 2, 'disponivel'),
('3', 'Suite duplo Casal', 'Um quarto simples mas com muito conforto para os casais com duas cama de casal, suite, serviços como TV a Cabo, wifi inclusos', 200, 4, 'disponivel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_reserva`
--

DROP TABLE IF EXISTS `tb_reserva`;
CREATE TABLE IF NOT EXISTS `tb_reserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `numero_quarto` int(11) DEFAULT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `valor_toal` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  KEY `numero_quarto` (`numero_quarto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
