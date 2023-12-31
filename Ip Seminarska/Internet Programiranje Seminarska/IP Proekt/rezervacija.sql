-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 08:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `изнајмување на автомобили`
--

-- --------------------------------------------------------

--
-- Table structure for table `резервација`
--

CREATE TABLE `резервација` (
  `korisnikid` int(11) NOT NULL,
  `kolaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `резервација`
--

INSERT INTO `резервација` (`korisnikid`, `kolaid`) VALUES
(1, 1),
(3, 3),
(3, 7),
(2, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `резервација`
--
ALTER TABLE `резервација`
  ADD KEY `relkola` (`kolaid`),
  ADD KEY `relkorisnik` (`korisnikid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `резервација`
--
ALTER TABLE `резервација`
  ADD CONSTRAINT `relkola` FOREIGN KEY (`kolaid`) REFERENCES `карактеристикиколи` (`id`),
  ADD CONSTRAINT `relkorisnik` FOREIGN KEY (`korisnikid`) REFERENCES `регистердел` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
