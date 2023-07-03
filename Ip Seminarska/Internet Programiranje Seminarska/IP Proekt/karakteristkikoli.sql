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
-- Table structure for table `карактеристикиколи`
--

CREATE TABLE `карактеристикиколи` (
  `id` int(11) NOT NULL,
  `целоимекола` varchar(250) NOT NULL,
  `марка` varchar(250) NOT NULL,
  `модел` varchar(250) NOT NULL,
  `генерација` varchar(250) NOT NULL,
  `мотор` varchar(250) NOT NULL,
  `датапроизводство` varchar(250) NOT NULL,
  `типкола` varchar(250) NOT NULL,
  `седишта` int(11) NOT NULL,
  `врати` int(11) NOT NULL,
  `цена` int(11) NOT NULL,
  `сликакола` varchar(250) NOT NULL,
  `регистер_id` int(11) NOT NULL,
  `uplatiid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `карактеристикиколи`
--

INSERT INTO `карактеристикиколи` (`id`, `целоимекола`, `марка`, `модел`, `генерација`, `мотор`, `датапроизводство`, `типкола`, `седишта`, `врати`, `цена`, `сликакола`, `регистер_id`, `uplatiid`) VALUES
(1, 'BMW 2 серија', 'BMW', '2 серија', 'II (2ra)', '2.0 L4 turbo DOHC 16 valves (241 КС)', 'Мај, 2016 година', 'Купе', 4, 3, 2000, 'bmw1.jpg', 1, 1),
(2, 'BMW 4 серија', 'BMW', '4 серија', 'IV (4та)', '2.0 I I-4 (248 КС)', 'Мај, 2019 година', 'Купе', 4, 3, 3500, 'bmw2.jpg', 2, 2),
(3, 'BMW X2 серија', 'BMW', 'X2 серија', 'II (2ра)', '2.0 I I-4 (228 КС)', 'Јуни. 2018 година', 'Џип', 5, 5, 3000, 'bmw3.jpg', 3, 3),
(4, 'Hyundai i20', 'Hyundai', 'i20', 'III (3та)', 'N 1.6 T-GDi (204 КС)', 'Април, 2021 година', 'Хечбек', 5, 5, 1500, 'h1.jpg', 1, 1),
(5, 'Hyundao Tucson', 'Hyundai', 'Tucson', 'VII (7ма)', '2.0 L L4 DOHC 16-valve (164 КС)', 'Април, 2017 година', 'Џип', 5, 5, 3300, 'h2.jpg', 2, 2),
(6, 'Hyundai Elantra', 'Hyundai', 'Elantra', 'IV (4та)', '2.0 I (173 КС)', 'Декември, 2014 година', 'Седан', 5, 5, 1200, 'h3.jpg', 3, 3),
(7, 'Mercedes-Benz S-класа', 'Mercedes-Benz', 'S-класа', 'V (5та)', 'V8 (463 КС)', 'Април, 2015 година', 'Седан', 5, 5, 5000, 'm1.jpg', 1, 1),
(8, 'Mercedes-Benz C-класа', 'Mercedes-Benz', 'C-класа', 'IX (9та)', '2.0 L four-cylinder (254 КС)', 'Април, 2019 година', 'Седан', 5, 5, 3500, 'm2.jpg', 2, 2),
(9, 'Mercedes-Benz G-класа', 'Mercedes-Benz', 'G-класа', 'VIII (8ма)', '4.0 L twin-turbo V8 (382 КС)', 'Април, 2018 година', 'Џип', 5, 5, 4500, 'm3.jpg', 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `карактеристикиколи`
--
ALTER TABLE `карактеристикиколи`
  ADD PRIMARY KEY (`id`),
  ADD KEY `релација(корисник и коли)` (`регистер_id`),
  ADD KEY `uplatiid` (`uplatiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `карактеристикиколи`
--
ALTER TABLE `карактеристикиколи`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `карактеристикиколи`
--
ALTER TABLE `карактеристикиколи`
  ADD CONSTRAINT `релација(корисник и коли)` FOREIGN KEY (`регистер_id`) REFERENCES `карактеристикиколи` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
