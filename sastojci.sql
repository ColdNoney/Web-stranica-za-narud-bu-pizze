-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 12:46 PM
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
-- Table structure for table `narudzba`
--

CREATE TABLE `narudzba` (
  `idNarudzbe` int(11) NOT NULL,
  `ime` varchar(30) DEFAULT NULL,
  `prezime` varchar(30) DEFAULT NULL,
  `adresa` varchar(50) DEFAULT NULL,
  `kontakt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narudzba`
--

INSERT INTO `narudzba` (`idNarudzbe`, `ime`, `prezime`, `adresa`, `kontakt`) VALUES
(1, '', '', '', 0),
(2, 't', 't', 't', 77);

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
  MODIFY `idNarudzbe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sastojak`
--
ALTER TABLE `sastojak`
  MODIFY `IDsastojka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
