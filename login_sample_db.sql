-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 09:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `carte`
--

CREATE TABLE `carte` (
  `id_carta` int(11) NOT NULL,
  `natura` varchar(30) DEFAULT NULL,
  `valore` float DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `nome_carta` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carte`
--

INSERT INTO `carte` (`id_carta`, `natura`, `valore`, `img`, `nome_carta`) VALUES
(1, 'verde', 12, 'archonofcruelty1.jpg', 'archonofcruelty1'),
(2, 'rosso', 15, 'breyasapprentice.jpg', 'breyasapprentice'),
(3, 'giallo', 15, 'chitterspitter.jpg', 'chitterspitter'),
(4, 'verde', 12, 'endurance1.jpg', 'endurance1'),
(5, 'rosso', 15, 'fury1.jpg', 'fury1'),
(6, 'nero', 15, 'grief.jpg', 'grief'),
(7, 'blu', 15, 'inevitablebetrayal1.jpg', 'inevitablebetrayal1'),
(8, 'rosso', 11, 'bloodbraidmarauder.jpg', 'bloodbraidmarauder'),
(9, 'rosso', 12, 'harmonicprodigy.jpg', 'harmonicprodigy'),
(10, 'rosso', 16, 'meteorswarm.jpg', 'meteorswarm'),
(11, 'rosso', 16, 'ragavannimblepilferer1.jpg', 'ragavannimblepilferer1'),
(12, 'verde', 16, 'chatterfangsquirrelgeneral.jpg', 'chatterfangsquirrelgeneral'),
(13, 'verde', 15, 'instrumentofthebards.jpg', 'instrumentofthebards'),
(14, 'verde', 10, 'thrastatempestsroar.jpg', 'thrastatempestsroar'),
(15, 'verde', 10, 'titaniaprotectorofargoth1.jpg', 'titaniaprotectorofargoth1'),
(16, 'verde', 10, 'varissilverymoonranger.jpg', 'varissilverymoonranger'),
(17, 'blu', 10, 'dragonturtle.jpg', 'dragonturtle'),
(18, 'blu', 6, 'murktideregent.jpg', 'murktideregent'),
(19, 'blu', 8, 'subtlety.jpg', 'subtlety'),
(20, 'blu', 8, 'svyelunofseaandsky.jpg', 'svyelunofseaandsky'),
(21, 'blu', 20, 'thoughtmonitor1.jpg', 'thoughtmonitor1'),
(22, 'nero', 5, 'dauthivoidwalker1.jpg', 'dauthivoidwalker1'),
(23, 'nero', 5, 'magusofthebridge.jpg', 'magusofthebridge'),
(24, 'nero', 5, 'necrogoyf1.jpg', 'necrogoyf1');

-- --------------------------------------------------------

--
-- Table structure for table `possessi`
--

CREATE TABLE `possessi` (
  `id` int(11) NOT NULL,
  `id_utente` int(11) DEFAULT NULL,
  `id_card` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `possessi`
--

INSERT INTO `possessi` (`id`, `id_utente`, `id_card`) VALUES
(13, 2147483647, 1),
(14, 2147483647, 2),
(16, 3443453, 3),
(17, 3443453, 4),
(18, 3443453, 5),
(19, 2126861813, 6),
(20, 2126861813, 7),
(21, 2126861813, 8),
(22, 2126861813, 9),
(23, 934552118, 10),
(24, 934552118, 11),
(25, 934552118, 12),
(26, 350681972, 13),
(27, 350681972, 14),
(28, 350681972, 15),
(29, 4154830, 16),
(30, 4154830, 17),
(31, 4154830, 18),
(32, 1881646601, 19),
(33, 1881646601, 20),
(34, 1881646601, 21),
(35, 718689048, 22),
(36, 718689048, 23),
(37, 718689048, 24);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 2147483647, 'Antox93@googlemail.com ', 'asd', '2021-06-18 17:40:41'),
(2, 3443453, 'ninod', 'asd', '2021-06-21 12:16:39'),
(20, 2126861813, 'Pietro', 'prova1', '2021-07-06 20:27:43'),
(21, 934552118, 'pinco', 'pallino', '2021-07-06 20:27:54'),
(22, 350681972, 'Marco', 'prova', '2021-07-06 20:28:16'),
(23, 4154830, 'utente1', 'utente', '2021-07-06 20:28:48'),
(24, 1881646601, 'utente2', 'utente', '2021-07-06 20:29:03'),
(25, 718689048, 'utente3', 'asd', '2021-07-06 20:29:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`id_carta`);

--
-- Indexes for table `possessi`
--
ALTER TABLE `possessi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utente` (`id_utente`),
  ADD KEY `id_card` (`id_card`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carte`
--
ALTER TABLE `carte`
  MODIFY `id_carta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `possessi`
--
ALTER TABLE `possessi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `possessi`
--
ALTER TABLE `possessi`
  ADD CONSTRAINT `possessi_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `possessi_ibfk_2` FOREIGN KEY (`id_card`) REFERENCES `carte` (`id_carta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
