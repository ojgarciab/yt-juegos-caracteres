SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `pruebas`;
USE `pruebas`;

-- --------------------------------------------------------

CREATE TABLE `tabla_latin1` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tabla_latin1` (`id`, `texto`) VALUES
(1, '¡Países!'),
(2, '¿Dónde?');


-- --------------------------------------------------------

CREATE TABLE `tabla_utf8` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tabla_utf8` (`id`, `texto`) VALUES
(1, '¡Países!'),
(2, '¿Dónde?');

-- --------------------------------------------------------
