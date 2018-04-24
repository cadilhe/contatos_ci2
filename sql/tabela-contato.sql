-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Abr-2018 às 22:58
-- Versão do servidor: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contatos_ci2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `idContato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL, 
  `cpf` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `telefone 1` varchar(45) NOT NULL,
  `telefone 2` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idContato`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `cpf`, `endereco`, `email`, `senha`, `status`, `nivel`) VALUES
(1, 'Carlos Alberto Fernandes Cadilhe', '123456789-00', 'Rua Olimpio Leite da Silva, 77, Sobreloja', 'cadilhe@gmail.com', '2b1faf3b70f4b5fb1d9ad25fe03b8af2', 1, 1),
(2, 'Pedro Henrique', '123456789-99', 'Ru Caraguatatuba 12345', 'pedro.henrique123@gmail.com', 'c6cc8094c2dc07b700ffcc36d64e2138', 1, 2),
(3, 'Patricia Lacerda', '09876543210', 'Estrada das Oliveiras', 'patcacal1212@gmail.com', '743982df4b872edeb81ed3ed9c7e618b', 1, 2),
(4, 'Mayra Bueno', '132465798-00', 'Rua Rio Grande do Norte', 'mayra.bueno12345@email.com', '3b6533cfca994e8bd63aaea47c2ee0c9', 1, 2),
(5, 'Peterson Munuera', '32165498700', 'Rua Peterson 23456', 'peterson.un@hotmail.com', '3e6f31d8c5f341a9c1b16dcf607e1ace', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
