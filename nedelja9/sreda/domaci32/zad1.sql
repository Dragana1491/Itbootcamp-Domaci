-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 11:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zad1`
--
CREATE DATABASE IF NOT EXISTS `4712_domaci32_zad1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `zad1`;

-- --------------------------------------------------------

--
-- Table structure for table `destinacije`
--

CREATE TABLE `destinacije` (
  `id` int(11) NOT NULL,
  `drzava` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grad` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viza` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinacije`
--

INSERT INTO `destinacije` (`id`, `drzava`, `grad`, `viza`) VALUES
(1234, 'Spanija', 'Barselona', 1),
(1235, 'Nemacka', 'Drezden', 0);

-- --------------------------------------------------------

--
-- Table structure for table `putnici`
--

CREATE TABLE `putnici` (
  `pasos` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ime_prezime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `putnici`
--

INSERT INTO `putnici` (`pasos`, `ime_prezime`) VALUES
('1234567', 'Pera Peric');

-- --------------------------------------------------------

--
-- Table structure for table `putovanja`
--

CREATE TABLE `putovanja` (
  `id` int(11) NOT NULL,
  `datum_polaska` date NOT NULL,
  `datum_povratka` date NOT NULL,
  `id_destinacije` int(11) NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `putovanja`
--

INSERT INTO `putovanja` (`id`, `datum_polaska`, `datum_povratka`, `id_destinacije`, `cena`) VALUES
(1234, '2021-06-16', '2021-06-23', 1234, '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `spisak_putnika`
--

CREATE TABLE `spisak_putnika` (
  `id` int(11) NOT NULL,
  `id_putovanja` int(11) NOT NULL,
  `broj_pasosa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popust` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spisak_putnika`
--

INSERT INTO `spisak_putnika` (`id`, `id_putovanja`, `broj_pasosa`, `popust`) VALUES
(1234, 1234, '1234567', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinacije`
--
ALTER TABLE `destinacije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `putnici`
--
ALTER TABLE `putnici`
  ADD PRIMARY KEY (`pasos`);

--
-- Indexes for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_destinacije` (`id_destinacije`);

--
-- Indexes for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  ADD PRIMARY KEY (`id`),
  ADD KEY `broj_pasosa` (`broj_pasosa`),
  ADD KEY `id_putovanja` (`id_putovanja`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinacije`
--
ALTER TABLE `destinacije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1237;

--
-- AUTO_INCREMENT for table `putovanja`
--
ALTER TABLE `putovanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD CONSTRAINT `putovanja_ibfk_1` FOREIGN KEY (`id_destinacije`) REFERENCES `destinacije` (`id`);

--
-- Constraints for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  ADD CONSTRAINT `spisak_putnika_ibfk_1` FOREIGN KEY (`broj_pasosa`) REFERENCES `putnici` (`pasos`),
  ADD CONSTRAINT `spisak_putnika_ibfk_2` FOREIGN KEY (`id_putovanja`) REFERENCES `putovanja` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
