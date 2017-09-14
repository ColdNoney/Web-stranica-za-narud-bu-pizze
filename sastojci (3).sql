-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 11:15 PM
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
(94, 15),
(94, 20),
(94, 13),
(94, 14),
(94, 16),
(94, 19),
(94, 17),
(94, 22),
(95, 15),
(95, 20),
(95, 13),
(95, 16),
(95, 15),
(95, 20),
(95, 13),
(95, 16),
(96, 15),
(96, 7),
(96, 20),
(96, 17),
(96, 18),
(96, 19),
(96, 21),
(96, 23),
(96, 22),
(96, 15),
(96, 7),
(96, 20),
(96, 14),
(96, 16),
(96, 17),
(96, 19),
(96, 21),
(96, 23),
(96, 22),
(97, 7),
(97, 7);

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
  `cijena` int(11) NOT NULL,
  `brojPizza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narudzba`
--

INSERT INTO `narudzba` (`idNarudzbe`, `ime`, `prezime`, `adresa`, `kontakt`, `cijena`, `brojPizza`) VALUES
(94, 'zu', 'zu', 'zu', 435345, 90, 3),
(95, 'rwerewrwe', 'rewrewr', 'werwer', 3424234, 60, 2),
(96, 'werterwt', 'treteer', 'rterte', 23423424, 260, 4),
(97, 'dasdas', 'dasdasda', 'dasdad', 214234, 60, 3);

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
(1, 'paprika', 6),
(2, 'gljive', 4),
(3, 'kukuruz', 4),
(4, 'kulen', 6),
(5, 'luk', 4),
(6, 'masline', 4),
(7, 'rajcica', 5),
(8, 'salata', 6),
(9, 'sir', 4),
(10, '4vrsteSira', 8),
(11, 'sunka', 6),
(12, 'tuna', 6),
(13, 'paprikaPola', 3),
(14, 'gljivePola', 2),
(15, 'kukuruzPola', 2),
(16, 'kulenPola', 3),
(17, 'lukPola', 2),
(18, 'maslinePola', 2),
(19, 'salataPola', 3),
(20, 'sirPola', 2),
(21, '4vrsteSiraPola', 4),
(22, 'sunkaPola', 3),
(23, 'tunaPola', 3);

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
  MODIFY `idNarudzbe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `sastojak`
--
ALTER TABLE `sastojak`
  MODIFY `IDsastojka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
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
