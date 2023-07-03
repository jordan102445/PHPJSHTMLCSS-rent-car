-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 08:03 PM
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
-- Table structure for table `занас`
--

CREATE TABLE `занас` (
  `id` int(11) NOT NULL,
  `накраткозанас` varchar(250) NOT NULL,
  `именафирма` varchar(250) NOT NULL,
  `описзанас` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `занас`
--

INSERT INTO `занас` (`id`, `накраткозанас`, `именафирма`, `описзанас`) VALUES
(1, 'Накратко за нас:', 'CARGRAB', 'Нашата веб-страна нуди брзо и ефикасно изнајмување на автомобили од понудената листа на автомобили. Системот за корисниците е достапен во било кое време и нуди широк избор на автомобили, од кои корисникот избира според свој избор и според своите потреби. Овој систем е исто така многу користен и од страна на туристите, кои ја посетуваат Република Македонија и кои сакаат да си го поминат одморот беспрекорно.'),
(2, 'Накратко за нас:', 'CARGRAB', 'Н'),
(3, 'Накратко за нас:', 'CARGRAB', 'Н'),
(4, 'Накратко за нас:', 'CARGRAB', 'Нашата веб-страна нуди брзо и ефикасно изнајмување на автомобили од понудената листа на автомобили. Системот за корисниците е достапен во било кое време и нуди широк избор на автомобили, од кои корисникот избира според свој избор и според своите потреби. Овој систем е исто така многу користен и од страна на туристите, кои ја посетуваат Република Македонија и кои сакаат да си го поминат одморот беспрекорно.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `занас`
--
ALTER TABLE `занас`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `занас`
--
ALTER TABLE `занас`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
