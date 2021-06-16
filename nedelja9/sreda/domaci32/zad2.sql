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
-- Database: `zad2`
--
CREATE DATABASE IF NOT EXISTS `4712_domaci32_zad2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `zad2`;

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id` int(11) NOT NULL,
  `vreme` date NOT NULL,
  `id_usera` int(11) NOT NULL,
  `ukupno` int(11) NOT NULL,
  `adresa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korpa`
--

INSERT INTO `korpa` (`id`, `vreme`, `id_usera`, `ukupno`, `adresa`) VALUES
(1234, '2021-06-16', 12345, 50, 'Savska 5');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tip` enum('prehrana','hemija','odeca','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `ime`, `tip`, `cena`) VALUES
('123456', 'hleb', 'prehrana', '50.00'),
('789456', 'majica', 'odeca', '999.00');

-- --------------------------------------------------------

--
-- Table structure for table `stavke`
--

CREATE TABLE `stavke` (
  `barkod` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `id_korpe` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stavke`
--

INSERT INTO `stavke` (`barkod`, `id`, `id_korpe`, `kolicina`) VALUES
('123456', 12345, 1234, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- Indexes for table `stavke`
--
ALTER TABLE `stavke`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`),
  ADD KEY `id_korpe` (`id_korpe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `stavke`
--
ALTER TABLE `stavke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stavke`
--
ALTER TABLE `stavke`
  ADD CONSTRAINT `stavke_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`),
  ADD CONSTRAINT `stavke_ibfk_2` FOREIGN KEY (`id_korpe`) REFERENCES `korpa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
