-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Nov-2017 às 01:32
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalhofinal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `cod_brand` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `reputation` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_brand`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `brand`
--

INSERT INTO `brand` (`cod_brand`, `name`, `reputation`) VALUES
(6, 'Samsung', 5),
(5, 'Apple', 4),
(7, 'Motorola', 3),
(8, 'Asus', 3),
(9, 'Positivo', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `camera`
--

DROP TABLE IF EXISTS `camera`;
CREATE TABLE IF NOT EXISTS `camera` (
  `cod_cam` int(11) NOT NULL AUTO_INCREMENT,
  `sensor` float DEFAULT NULL,
  `aperture` float DEFAULT NULL,
  PRIMARY KEY (`cod_cam`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `camera`
--

INSERT INTO `camera` (`cod_cam`, `sensor`, `aperture`) VALUES
(7, 12, 1.8),
(6, 12, 1.7),
(8, 16, 1.9),
(9, 8, 1.8),
(10, 2, 2.2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cpu`
--

DROP TABLE IF EXISTS `cpu`;
CREATE TABLE IF NOT EXISTS `cpu` (
  `cod_cpu` int(11) NOT NULL AUTO_INCREMENT,
  `cpu_model` varchar(20) DEFAULT NULL,
  `clock` float DEFAULT NULL,
  `cores` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_cpu`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cpu`
--

INSERT INTO `cpu` (`cod_cpu`, `cpu_model`, `clock`, `cores`) VALUES
(6, 'Snapdragon 625', 2.1, 8),
(5, 'Snapdragon 835', 2.2, 8),
(7, 'A11', 2, 4),
(8, 'HelioX10', 1.8, 8),
(9, 'MediaTek MT6572', 1.2, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `os`
--

DROP TABLE IF EXISTS `os`;
CREATE TABLE IF NOT EXISTS `os` (
  `cod_os` int(11) NOT NULL AUTO_INCREMENT,
  `os_name` varchar(10) DEFAULT NULL,
  `version` float DEFAULT NULL,
  PRIMARY KEY (`cod_os`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `os`
--

INSERT INTO `os` (`cod_os`, `os_name`, `version`) VALUES
(5, 'Android', 7),
(6, 'Android', 6.1),
(7, 'Android', 5.3),
(8, 'IOS', 10),
(9, 'IOS', 11),
(10, 'Android', 5.2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ram`
--

DROP TABLE IF EXISTS `ram`;
CREATE TABLE IF NOT EXISTS `ram` (
  `cod_ram` int(11) NOT NULL AUTO_INCREMENT,
  `ram_size` int(11) DEFAULT NULL,
  `speed` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`cod_ram`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ram`
--

INSERT INTO `ram` (`cod_ram`, `ram_size`, `speed`) VALUES
(6, 2, '1333'),
(5, 1, '1333'),
(7, 3, '1600'),
(8, 2, '2333'),
(9, 3, '2333'),
(10, 4, '2333');

-- --------------------------------------------------------

--
-- Estrutura da tabela `screen`
--

DROP TABLE IF EXISTS `screen`;
CREATE TABLE IF NOT EXISTS `screen` (
  `cod_screen` int(11) NOT NULL AUTO_INCREMENT,
  `protection` varchar(20) DEFAULT NULL,
  `screen_size` float DEFAULT NULL,
  `resolution` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`cod_screen`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `screen`
--

INSERT INTO `screen` (`cod_screen`, `protection`, `screen_size`, `resolution`) VALUES
(6, 'Gorrila Glass 4', 6.2, '2560x1440'),
(5, 'Gorrila Glass 4', 5.8, '2560x1440'),
(7, 'Gorilla Glass 2', 5.5, '1920x1080'),
(8, 'Ions ', 4.7, '1334x760'),
(9, 'Ions ', 5.5, '1920x1080');

-- --------------------------------------------------------

--
-- Estrutura da tabela `smart`
--

DROP TABLE IF EXISTS `smart`;
CREATE TABLE IF NOT EXISTS `smart` (
  `cod_smart` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(20) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `espessura` float DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `cod_rom` int(11) DEFAULT NULL,
  `cod_os` int(11) DEFAULT NULL,
  `cod_brand` int(11) DEFAULT NULL,
  `cod_cpu` int(11) DEFAULT NULL,
  `cod_screen` int(11) DEFAULT NULL,
  `cod_ram` int(11) DEFAULT NULL,
  `cod_cam` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_smart`),
  KEY `cod_rom` (`cod_rom`),
  KEY `cod_os` (`cod_os`),
  KEY `cod_brand` (`cod_brand`),
  KEY `cod_cpu` (`cod_cpu`),
  KEY `cod_ram` (`cod_ram`),
  KEY `cod_screen` (`cod_screen`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `smart`
--

INSERT INTO `smart` (`cod_smart`, `model`, `price`, `espessura`, `color`, `cod_rom`, `cod_os`, `cod_brand`, `cod_cpu`, `cod_screen`, `cod_ram`, `cod_cam`) VALUES
(17, 'Zenfone 3', 949, 8.2, 'Dourado', 10, 5, 6, 6, 6, 6, 10),
(16, 'Iphone 8 Plus', 5299, 6.9, 'Space grey', 12, 9, 5, 7, 9, 9, 8),
(14, 'Galaxy S8 Plus', 2999, 7.8, 'Preto', 11, 5, 6, 5, 6, 10, 7),
(15, 'Iphone 8 ', 4599, 6.9, 'Space grey', 12, 9, 5, 7, 8, 9, 6),
(13, 'Zenfone 3', 949, 8.2, 'Dourado', 11, 5, 6, 5, 5, 10, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `storage`
--

DROP TABLE IF EXISTS `storage`;
CREATE TABLE IF NOT EXISTS `storage` (
  `cod_rom` int(11) NOT NULL AUTO_INCREMENT,
  `rom_size` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_rom`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `storage`
--

INSERT INTO `storage` (`cod_rom`, `rom_size`) VALUES
(10, 32),
(13, 256),
(12, 128),
(9, 16),
(11, 64);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
