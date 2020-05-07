-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creato il: Mag 07, 2020 alle 15:26
-- Versione del server: 10.4.10-MariaDB
-- Versione PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team-feb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_patient` int(11) NOT NULL,
  `id_treatment` int(11) NOT NULL,
  `time_slot` varchar(5) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_key_patient` (`id_patient`),
  KEY `foreign_key:treatment` (`id_treatment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_patient` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_key_patien` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `invoice_treatment`
--

DROP TABLE IF EXISTS `invoice_treatment`;
CREATE TABLE IF NOT EXISTS `invoice_treatment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_invoice` int(11) NOT NULL,
  `id_treatment` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_key_invoice` (`id_invoice`),
  KEY `foreign_key_treatment` (`id_treatment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ssn` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `treatment`
--

DROP TABLE IF EXISTS `treatment`;
CREATE TABLE IF NOT EXISTS `treatment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `duration` float NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `foreign_key:treatment` FOREIGN KEY (`id_treatment`) REFERENCES `treatment` (`id`),
  ADD CONSTRAINT `foreign_key_patient` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`);

--
-- Limiti per la tabella `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `foreign_key_patien` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`);

--
-- Limiti per la tabella `invoice_treatment`
--
ALTER TABLE `invoice_treatment`
  ADD CONSTRAINT `foreign_key_invoice` FOREIGN KEY (`id_invoice`) REFERENCES `invoice_treatment` (`id`),
  ADD CONSTRAINT `foreign_key_treatment` FOREIGN KEY (`id_treatment`) REFERENCES `invoice_treatment` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
