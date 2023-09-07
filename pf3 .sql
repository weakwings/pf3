-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Set-2023 às 15:17
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pf3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psswrd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `psswrd`) VALUES
(2, 'felipe', 'qwer@qwer', '$2y$10$5yXqP9ZvjeUiQ.OCneJE3eWaWDd3IVWllVVsb2akIxsou8.kQgu2C'),
(4, 'beta', 'beta@beta', '$2y$10$rc5cznIJuHyB6cZ5BNrCCujbXkyZn6XUrvkiXUqcfXRYxM2VUqMke');

-- --------------------------------------------------------

--
-- Estrutura da tabela `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `class`
--

INSERT INTO `class` (`id`, `subject`) VALUES
(1, 'Mathematics'),
(2, 'Science'),
(3, 'English'),
(4, 'History'),
(5, 'Geography'),
(6, 'Art'),
(7, 'Music'),
(8, 'Physical Education'),
(9, 'Social Studies'),
(10, 'Computer Science'),
(11, 'Biology'),
(12, 'Chemistry'),
(13, 'Physics'),
(14, 'Economics'),
(15, 'Business Studies');

-- --------------------------------------------------------

--
-- Estrutura da tabela `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `DNI` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psswrd` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dbirth` date DEFAULT NULL,
  `grades` varchar(255) NOT NULL,
  `class_sl` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `DNI` (`DNI`),
  UNIQUE KEY `email` (`email`),
  KEY `class_sl` (`class_sl`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `student`
--

INSERT INTO `student` (`id`, `DNI`, `name`, `email`, `psswrd`, `address`, `dbirth`, `grades`, `class_sl`) VALUES
(3, '129831981', 'Felipe', 'fe@fe', '$2y$10$DdQSd4zr76lCH6IjncojReMpbKlZvsY3nri0YXd4BfnYAAWZFmtRS', 'sp', '2023-09-28', '10', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psswrd` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dbirth` date DEFAULT NULL,
  `dclass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `psswrd`, `address`, `dbirth`, `dclass`) VALUES
(11, 'harold', 'qwe@qwe', '$2y$10$N.4EUTKU0oM1JkWtl.4vPuEf4gZnTp6NuPnO6nRDRyLbSBUuMk4BK', 'peru', '2023-06-14', '11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
