-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 08:02 PM
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
-- Table structure for table `izvrseniuplati`
--

CREATE TABLE `izvrseniuplati` (
  `ID` int(11) UNSIGNED NOT NULL,
  `imeprez` varchar(50) DEFAULT NULL,
  `brkarticka` int(16) DEFAULT NULL,
  `iznosVkupno` int(11) DEFAULT NULL,
  `kolaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `izvrseniuplati`
--

INSERT INTO `izvrseniuplati` (`ID`, `imeprez`, `brkarticka`, `iznosVkupno`, `kolaid`) VALUES
(1, 'andrej stojanov', 2147483647, 15000, 1),
(2, 'Jordan Trajkov', 2147483647, 10500, 2),
(3, 'Aleksandar Petrov', 32134214, 14000, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `izvrseniuplati`
--
ALTER TABLE `izvrseniuplati`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `uplatirel` (`kolaid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `izvrseniuplati`
--
ALTER TABLE `izvrseniuplati`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `izvrseniuplati`
--
ALTER TABLE `izvrseniuplati`
  ADD CONSTRAINT `uplatirel` FOREIGN KEY (`kolaid`) REFERENCES `карактеристикиколи` (`uplatiid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
