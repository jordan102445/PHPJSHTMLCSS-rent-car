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
-- Table structure for table `регистердел`
--

CREATE TABLE `регистердел` (
  `id` int(11) NOT NULL,
  `ИмеПрезиме` varchar(100) NOT NULL,
  `Емаил` varchar(100) NOT NULL,
  `Корисничкоиме` varchar(100) NOT NULL,
  `Лозинка` varchar(100) NOT NULL,
  `Телброј` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `регистердел`
--

INSERT INTO `регистердел` (`id`, `ИмеПрезиме`, `Емаил`, `Корисничкоиме`, `Лозинка`, `Телброј`) VALUES
(1, 'JoceTrajkov', 'trajkov.jordan18@gmail.com', 'joce411', '$2y$10$QvG/dvW7FVCEH1NmFoVizevSi6fYnfVeupqX9Xy/ZkRH6HcmIfzDe', 5345345),
(2, 'AleksandarPetrov', 'acepetrov@gmail.com', 'ace221', '$2y$10$yiGgI5AibXDYDeZJU0sJr.tGASFNDXFwXxRIuE7DWMzqnCRAM1K9W', 123213213),
(3, 'AndrejStojanov', 'andrej@gmail.com', 'andrej112', '$2y$10$n3Pq0PX4Ccg611QNW5e8ReHZcy.K7E/4aEPyoQT68NFNd.sK.9PCy', 1231231),
(20, 'JordanTrajkov', 'asdasdas@gmail.com', 'joce23423', '$2y$10$GtO0YdwqI1iCtn3uG3kZ1.sSTg6ebStdqmIuRRcn4YLDSY.1fr4X6', 12312312),
(21, 'JordanTrajkovv', 'sdfsf@gmail.com', 'joce523', '$2y$10$XXZXTiA.CSPDG1uQdtnT6.yDpod9.BrAxSTmWUQnWfyCU5RxunmX.', 21214214),
(22, 'JordanTrajkovvv', 'sopravess@gmail.com', 'joce555', '$2y$10$yVqlDhL0zBmY666TuIi6iekRmdYXcEYlPjJjpNdn3QwqKjOpMu0LG', 534534522),
(23, 'jocetrajkov', 'dsadas@gmail.com', 'joce553', 'a7a0a62a55745efb454f8f73c80464c9', 2147483647),
(24, 'Jordantv', 'dgfdsg@gmail.com', 'joce5453', '08b36770fa02927292f663de3353d27e', 213213213),
(25, 'jordavvv', 'sadsad@gmail.com', 'joce5233', 'f682dcc9177a29d6747ef232293c0c79', 42123213),
(26, 'Jordannn', 'gsgseg@gmail.com', 'joce45', '6366007649b1a3e7a8e2ae418398a5ab', 312421412),
(27, 'JordanTrajkovv', 'gsdgfs@gmail.com', 'joce549', '9c6978c50adf66ada8fd411aaceb8aa2', 22312321),
(28, 'AleksandarPetrovvvv', 'ace123@gmail.com', 'ace321', '5ef7ec5d5c2a12f82c12861f982fea3e', 1231231),
(29, 'sfdfsdfsas', 'sadasd@gmail.com', 'aa44', '4124bc0a9335c27f086f24ba207a4912', 4321412),
(30, 'JoceTrajkov', 'fsfsafas', 'joce5511', '5c231bd98ab9c2dee72264d061eba3a1', 321312321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `регистердел`
--
ALTER TABLE `регистердел`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `регистердел`
--
ALTER TABLE `регистердел`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
