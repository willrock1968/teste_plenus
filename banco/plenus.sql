-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Jun-2018 às 04:22
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plenus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_nivel1`
--

CREATE TABLE `itens_nivel1` (
  `iditens_nivel1` int(11) NOT NULL,
  `nivel1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itens_nivel1`
--

INSERT INTO `itens_nivel1` (`iditens_nivel1`, `nivel1`) VALUES
(6, 'Eletronicos'),
(7, 'Carros'),
(8, 'Moda'),
(9, 'Cama, Mesa e Banho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_nivel2`
--

CREATE TABLE `itens_nivel2` (
  `iditens_nivel2` int(11) NOT NULL,
  `iditens_nivel1` int(11) NOT NULL,
  `nivel2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itens_nivel2`
--

INSERT INTO `itens_nivel2` (`iditens_nivel2`, `iditens_nivel1`, `nivel2`) VALUES
(1, 7, 'Porsche'),
(2, 6, 'Computador'),
(3, 8, 'Calça Jeans'),
(4, 9, 'Toalha de Banho');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itens_nivel1`
--
ALTER TABLE `itens_nivel1`
  ADD PRIMARY KEY (`iditens_nivel1`);

--
-- Indexes for table `itens_nivel2`
--
ALTER TABLE `itens_nivel2`
  ADD PRIMARY KEY (`iditens_nivel2`),
  ADD KEY `fk_itens_nivel2_itens_nivel1_idx` (`iditens_nivel1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itens_nivel1`
--
ALTER TABLE `itens_nivel1`
  MODIFY `iditens_nivel1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `itens_nivel2`
--
ALTER TABLE `itens_nivel2`
  MODIFY `iditens_nivel2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `itens_nivel2`
--
ALTER TABLE `itens_nivel2`
  ADD CONSTRAINT `fk_itens_nivel2_itens_nivel1` FOREIGN KEY (`iditens_nivel1`) REFERENCES `itens_nivel1` (`iditens_nivel1`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
