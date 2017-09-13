-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 07:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sastojci`
--

-- --------------------------------------------------------

--
-- Table structure for table `narudba_sastojak`
--

CREATE TABLE `narudba_sastojak` (
  `narudba_id` int(11) DEFAULT NULL,
  `sastojak_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narudba_sastojak`
--

INSERT INTO `narudba_sastojak` (`narudba_id`, `sastojak_id`) VALUES
(61, 3),
(61, 7),
(61, 9),
(61, 1),
(61, 3),
(61, 7),
(61, 9),
(61, 1),
(61, 2),
(61, 4),
(62, 3),
(62, 7),
(62, 9),
(62, 1),
(62, 3),
(62, 7),
(62, 9),
(62, 1),
(62, 2),
(62, 4),
(63, 3),
(63, 7),
(63, 9),
(63, 1),
(63, 3),
(63, 7),
(63, 9),
(63, 1),
(63, 2),
(63, 4),
(64, 3),
(64, 7),
(64, 9),
(64, 1),
(64, 3),
(64, 7),
(64, 9),
(64, 1),
(64, 2),
(64, 4),
(65, 3),
(65, 7),
(65, 9),
(65, 1),
(65, 3),
(65, 7),
(65, 9),
(65, 1),
(65, 2),
(65, 4),
(66, 3),
(66, 7),
(66, 9),
(66, 1),
(66, 3),
(66, 7),
(66, 9),
(66, 1),
(66, 2),
(66, 4),
(67, 3),
(67, 7),
(67, 9),
(67, 1),
(67, 3),
(67, 7),
(67, 9),
(67, 1),
(67, 2),
(67, 4),
(68, 3),
(68, 7),
(68, 9),
(68, 1),
(68, 3),
(68, 7),
(68, 9),
(68, 1),
(68, 2),
(68, 4),
(69, 3),
(69, 7),
(69, 9),
(69, 1),
(69, 3),
(69, 7),
(69, 9),
(69, 1),
(69, 2),
(69, 4),
(70, 3),
(70, 7),
(70, 9),
(70, 1),
(70, 3),
(70, 7),
(70, 9),
(70, 1),
(70, 2),
(70, 4),
(71, 3),
(71, 7),
(71, 9),
(71, 1),
(71, 3),
(71, 7),
(71, 9),
(71, 1),
(71, 2),
(71, 4),
(72, 3),
(72, 7),
(72, 9),
(72, 1),
(72, 3),
(72, 7),
(72, 9),
(72, 1),
(72, 2),
(72, 4),
(73, 3),
(73, 7),
(73, 9),
(73, 1),
(73, 2),
(73, 4),
(73, 7),
(73, 10),
(73, 12),
(73, 11),
(74, 9),
(74, 1),
(74, 2),
(74, 4),
(74, 5),
(74, 3),
(74, 7),
(74, 9),
(74, 1),
(74, 2),
(74, 4),
(75, 3),
(75, 7),
(75, 9),
(75, 1),
(75, 2),
(75, 3),
(75, 7),
(75, 9),
(75, 1),
(75, 2),
(75, 4),
(76, 3),
(76, 7),
(76, 9),
(76, 1),
(76, 3),
(76, 7),
(76, 9),
(76, 1),
(76, 2),
(76, 4),
(77, 3),
(77, 7),
(77, 9),
(77, 1),
(77, 2),
(78, 3),
(78, 7),
(78, 9),
(78, 1),
(78, 2),
(78, 4),
(78, 5),
(78, 6),
(78, 8),
(78, 10),
(79, 7),
(79, 7),
(79, 9),
(79, 1),
(79, 2),
(79, 5),
(80, 2),
(80, 8),
(80, 10),
(80, 7),
(80, 9),
(80, 1),
(80, 2),
(80, 4),
(80, 5),
(80, 6),
(80, 8);

-- --------------------------------------------------------

--
-- Table structure for table `narudzba`
--

CREATE TABLE `narudzba` (
  `idNarudzbe` int(11) NOT NULL,
  `ime` varchar(30) DEFAULT NULL,
  `prezime` varchar(30) DEFAULT NULL,
  `adresa` varchar(50) DEFAULT NULL,
  `kontakt` int(11) DEFAULT NULL,
  `cijena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narudzba`
--

INSERT INTO `narudzba` (`idNarudzbe`, `ime`, `prezime`, `adresa`, `kontakt`, `cijena`) VALUES
(61, 'ghf', 'hgfh', '54tg', 56456, 10),
(62, 'ghf', 'hgfh', '54tg', 56456, 10),
(63, 'ghf', 'hgfh', '54tg', 56456, 10),
(64, 'ghf', 'hgfh', '54tg', 56456, 10),
(65, 'ghf', 'hgfh', '54tg', 56456, 10),
(66, 'ghf', 'hgfh', '54tg', 56456, 10),
(67, 'ghf', 'hgfh', '54tg', 56456, 10),
(68, 'ghf', 'hgfh', '54tg', 56456, 10),
(69, 'ghf', 'hgfh', '54tg', 56456, 10),
(70, 'ghf', 'hgfh', '54tg', 56456, 11),
(71, 'ghf', 'hgfh', '54tg', 56456, 11),
(72, 'ghf', 'hgfh', '54tg', 56456, 20),
(73, 'uz', 'hggfhh', 'hgfgh', 546456, 40),
(74, 'nhg', 'n', 'nhg', 546, 84),
(75, 'gdf', 'gdfg', 'gf', 534, 84),
(76, '', '', '', 0, 20),
(77, '', '', '', 0, 60),
(78, 'gjghj', 'ghj', 'jghj', 64645, 100),
(79, '', '', '', 0, 16),
(80, 'ivo', 'ivic', 'ivina 21', 123123, 63);

-- --------------------------------------------------------

--
-- Table structure for table `sastojak`
--

CREATE TABLE `sastojak` (
  `IDsastojka` int(11) NOT NULL,
  `ImeSastojka` varchar(20) NOT NULL,
  `CijenaSastojka` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sastojak`
--

INSERT INTO `sastojak` (`IDsastojka`, `ImeSastojka`, `CijenaSastojka`) VALUES
(1, 'paprika', 1),
(2, 'gljive', 1),
(3, 'kukuruz', 1),
(4, 'kulen', 1),
(5, 'luk', 1),
(6, 'masline', 1),
(7, 'rajcica', 1),
(8, 'salata', 1),
(9, 'sir', 1),
(10, '4vrsteSira', 1),
(11, 'sunka', 1),
(12, 'tuna', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `narudba_sastojak`
--
ALTER TABLE `narudba_sastojak`
  ADD KEY `fk_narduba` (`narudba_id`),
  ADD KEY `fk_sastojak` (`sastojak_id`);

--
-- Indexes for table `narudzba`
--
ALTER TABLE `narudzba`
  ADD PRIMARY KEY (`idNarudzbe`);

--
-- Indexes for table `sastojak`
--
ALTER TABLE `sastojak`
  ADD PRIMARY KEY (`IDsastojka`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `narudzba`
--
ALTER TABLE `narudzba`
  MODIFY `idNarudzbe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `sastojak`
--
ALTER TABLE `sastojak`
  MODIFY `IDsastojka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `narudba_sastojak`
--
ALTER TABLE `narudba_sastojak`
  ADD CONSTRAINT `fk_narduba` FOREIGN KEY (`narudba_id`) REFERENCES `narudzba` (`idNarudzbe`),
  ADD CONSTRAINT `fk_sastojak` FOREIGN KEY (`sastojak_id`) REFERENCES `sastojak` (`IDsastojka`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
